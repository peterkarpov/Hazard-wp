<div class="close_search hidden-sm hidden-xs">x</div>

<div class="container">
    <div class="col-lg-12">
        <div class="row">
            <div class="search_popup hidden-sm hidden-xs">
                <form action="<?php echo home_url( '/' ) ?>" method="get" class="search_vspl">
                    <input name="s" type="search" value="<?php echo get_search_query() ?>" placeholder="Поиск..." class="input_vspl" />
                    <button type="submit" class="searchsubmit" name="submit" value="Search">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="opacity hidden-sm hidden-xs"></div>