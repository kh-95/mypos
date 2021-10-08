 <!-- support bar area start -->
 <div class="support-bar-area bg-orange">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="left-content-area"><!-- left content area -->
                    <div class="language-picker">
                        <div class="default">
                            <div class="slang-wrap">
                                <div class="img">
                                    <img src="/user/assets/img/lang-flag/enf.jpg" alt="language flag">
                                </div>
                                <div class="name">

Language

                                     <i class="fas fa-angle-down"></i></div>
                            </div>
                            <ul class="all-lang">
                                   
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        </li>
    @endforeach     
                                   
                                </ul>
                            </div>
                    </div>
                    <div class="currency-picker">
                        <div class="default">
                            <div class="slang-wrap">
                                <div class="name">USD <i class="fas fa-angle-down"></i></div>
                            </div>
                            <ul class="all-lang">
                                    <li>
                                        <div class="slang-wrap">
                                            <div class="name">IND </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="slang-wrap">
                                            <div class="name">AUD </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="slang-wrap">
                                            <div class="name">EUR </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>
                       
                    </div><!-- //.left content area -->
                    <div class="right-content-area"><!-- right content area -->
                        <ul>
                            <li>
                                Ordered before 17:30, shipped today
                            </li>
                            <li>
                                <i class="fas fa-truck"></i>  Free Shipping
                            </li>
                            <li>
                                <i class="fas fa-clock"></i> 24/7 Online Support
                            </li>
                        </ul>
                    </div><!-- //. right content area -->
                </div>
            </div>
        </div>
</div>
<!-- support bar area end -->  
<!-- support bar area two start -->
<div class="support-bar-two bg-orange">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="left-content">
                    <a href="/user/index.html" class="logo main-logo">
                        <img src="/user/assets/img/logo-white.png" alt="logo">
                    </a>
                </div>
                <div class="right-content">
                    <ul>
                        <li>
                            <div class="support-search-area">
                                <form action="http://idealbrothers.thesoftking.com/html/bigenza/bigenja/index-3.html" class="search-form">
                                    <div class="form-element has-icon">
                                        <input type="text" class="input-field" placeholder="Search your keyword">
                                        <div class="the-icon">
                                            <select class="category select selectpicker">
                                                    <option value="0">All Category</option>
                                                    <option value="0">Men's Wear</option>
                                                    <option value="0">Women's Wear</option>
                                                    <option value="0">Kids Wear</option>
                                                    <option value="0">Sportswear</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="submit-btn"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li>
                            <div class="single-support-info-item">
                                <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Email Us</h4>
                                    <span class="details">info@examplte.com</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-support-info-item">
                                <div class="icon">
                                        <i class="fas fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Free Support</h4>
                                    <span class="details">(012) 800 456 789 - 10</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- support bar area two end -->