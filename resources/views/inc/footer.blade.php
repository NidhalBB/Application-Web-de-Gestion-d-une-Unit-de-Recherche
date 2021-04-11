<footer class="site-footer bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
            <h2 class="footer-heading mb-4">Liens rapides</h2>
            <ul class="list-unstyled">
              <li><a href="/">@lang('home.Accueil')</a></li>
                <li><a href="/actualite">@lang('home.Actualités')</a></li>
                <li><a href="/publication">@lang('home.Publications')</a></li>
                <li><a href="/galerie">@lang('home.Galerie')</a></li>
            </ul>
          </div>
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
            <h2 class="footer-heading mb-4"></h2>
            <ul class="list-unstyled">
              <li><a href="/equipe">@lang('home.Équipe')</a></li>
              <li><a href="/projet">@lang('home.Projets')</a></li>
              <li><a href="/lien">@lang('home.Liens utiles')</a></li>
              @guest
              <li class="active"><a href="{{ route('login') }}"><span> @lang("home.S'identifier")</span></a></li>
              @endguest
            </ul>
          </div>
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
            <h2 class="footer-heading mb-4">Suivez nous</h2>
            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
