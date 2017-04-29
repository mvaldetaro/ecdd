<?php
/**
Template Name: Search Form
**/
?>
<div class="search">
  <div id="searchform" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="<?php bloginfo('url'); ?>" method="get" accept-charset="utf-8" id="searchform" role="search">
          <label for="s"> Buscar por:</label>
          <input id="s" class="search__form__input" type="text" name="s" placeholder="Digite aqui o que procura" value="<?php the_search_query(); ?>" >
          <div class="text-align-right">
            <button id="searchsubmit" class="btn btn-secondary search__form__button" type="submit" >
              <span>Buscar</span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


