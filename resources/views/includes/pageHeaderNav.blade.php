<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ asset("assets/images/backgrounds/banner-engineering.png") }});">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>{{ $header1 ?? '' }}</h2>
            <div class="thm-breadcrumb__box">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url("/") }}">Home</a></li>
                    <li><span class="icon-angle-left"></span></li>
                    <li>{{ $header2 ?? '' }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>