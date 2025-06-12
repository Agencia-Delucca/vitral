<?php get_header(); ?>

<style>
  #breadcrumb {
    display: none;
  }

  #page-404 {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 80vh;
  }

  #page-404 .container {
    border: 1px solid #fff;
    border-radius: 16px;
  }

  #page-404 .container .top {
    font-size: 48px !important;
    text-align: center;
    color: #fff;
    border-bottom: 1px solid #fff;
    font-weight: 300;
  }

  #page-404 .container .bottom {
    font-size: 24px !important;
    text-align: center;
    color: #fff;
    font-weight: 300;
  }

  #page-404 .container .cta {
    display: block;
    padding: 24px 48px;
    margin: 0 auto;
    width: fit-content;
    text-decoration: none;
    border-radius: 16px;
    background: #fff;
    color: var(--clr-primary);
    transition: all 0.3s ease-in-out;
  }

  #page-404 .container .cta:hover {
    background: #000;
    color: #fff;
  }

  @media (max-width: 991px) {
    #page-404 .container .top {
      font-size: 24px !important;
      text-align: center;
      color: #fff;
      border-bottom: 1px solid #fff;
      font-weight: 300;
    }

    #page-404 .container .bottom {
      font-size: 16px !important;
    }

    #page-404 .container .cta {
      padding: 16px 32px;
      border-radius: 8px;
    }
  }
</style>

<div id="page-404" class="bg-primary px-4 py-5">
  <div class="container px-3 px-md-5 py-5">
    <p class="top mb-0 pb-3 pb-md-5">
      <b>Ops!</b><br>
      <span>Página não encontrada</span>
    </p>
    <p class="bottom mb-0 pt-3 pt-md-5">
      Parece que você procurou por algo que não está aqui.
    </p>
    <a class="cta mt-3 mt-md-5" href="<?php echo home_url(); ?>" rel="noopener noreferrer">
      <b>
        Voltar para página inicial
      </b>
    </a>
  </div>
</div>

<?php get_footer(); ?>