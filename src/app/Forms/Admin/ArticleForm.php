<?php


namespace App\Forms\Admin;


use App\Helpers\Form;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\BaseModel;
use App\Models\Page;
use App\Models\PageType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class ArticleForm extends Form
{

    const FIELDS = [
        'title' => [
            'name' => 'title',
            'type' => 'text',
            'label' => 'admin.article.title',
            'rules' => ['max:255', 'min:2', 'required'],
            'attrs' => [
                'seoUrl' => true,
                'seoTitle' => true,
            ]
        ],
        'text' => [
            'name' => 'text',
            'type' => 'text',
            'label' => 'admin.article.text',
            'rules' => ['max:255', 'min:1', 'required'],
            'attrs' => [
                'seoUrl' => true,
                'seoTitle' => true,
            ]
        ],
        'active' => [
            'name' => 'active',
            'type' => 'checkbox',
            'label' => 'admin.active',
            'rules' => [],
            'options' => [],
        ],
    ];

    public function __construct($model = null)
    {
        foreach (self::FIELDS as $name => $field) {
            $this->modelFields[$name] = $field;
        }
        $categories = ArticleCategory::with([])->adminLocale()->get();
        foreach ($categories as $category) {
            $this->modelFields['article_category_id']['options'][$category->id] = $category->title;
        }
        parent::__construct($model, Article::class);
    }
}
