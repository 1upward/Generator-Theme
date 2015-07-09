<section class = "reviews_wr">
    <div class="container">
        <div class="reviewsBlock">
            <div class="reviewsBlockTitle">
                <h1 class = "blockTitle">Отзывы <a class = "reviews_all" href = "{link_blog_all}">Смотреть {kol_reviews} {ending}</a></h1>
            </div>
            
            <div class = "reviews">
                <a href="#"><span class = "textreviews">
                    {text}
                    </span>
                </a>
                <div class = "fioreviews">
                    {fio}
                </div>
                <div class = "namereviews">
                    {name}
                </div>
                <div class = "linkreviews">
                   <a href = "{link}"> {link}</a>
                </div>
                <a href="#" class="circArrow" onclick="return false;" ></a>

            </div>
        </div>
    </div>
    <div id = "count_rev" data-count-review="{count-rev}"></div>
    <div id = "col_rev" data-col-revievs = "{kol_reviews}"></div>
</section>