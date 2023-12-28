
        <div class="page_header">
            <div class="page_header_content" style="background-image: url({{asset('images/header_bg.png')}})">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="/">Strona główna</a></li>
                        @if(isset($pageName))
                            <li class="active">{!! $pageName !!}</li>
                        @endif
                    </ul>
                    @if(isset($pageName))
                        <h2 class="heading">{!! $pageName !!}</h2>
                    @endif
                </div>
            </div>
        </div>
