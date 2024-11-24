<template>
 <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
  <div class="container">
       <a class="navbar-brand logo-text" href="#">Bureau d'ordre</a> 
      <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav ms-auto navbar-nav-scroll">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#header">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>   
          
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#details">À propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#features">Fonctionnalités</a>
            </li>
          </ul>
          <span class="nav-item">
            <button @click="redirectToLogin" class="btn-solid-sm">Login</button>
          </span>
      </div> 
  </div> 
</nav>
<header id="header" class="header">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 col-xl-5">
              <div class="text-container">
                  <h1 class="h1-large">Simplifiez votre gestion de bureau d'ordre</h1>
                  <p class="p-large">Notre plateforme vous aide à optimiser vos processus et gagner en efficacité.</p>
                  <a class="btn-solid-lg" href="#services">Découvrez nos services</a>
              </div>
          </div> 
          <div class="col-lg-6 col-xl-7">
              <div class="image-container">
                  <img class="img-fluid" :src="'/assets/images/illustration.avif'" alt="alternative" />
              </div> 
          </div> 
      </div> 
  </div> 
</header> 
<div id="services" class="cards-1 bg-gray">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <h2>Explorer nos services</h2>
          </div> 
      </div>
      <div class="row">
          <div class="col-lg-12">
              
            
              <div class="card">
                <div class="card-icon">
                  <span class="fas fa-clipboard-check"></span>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Optimisation des processus</h5>
                  <p>Améliorez l'efficacité de vos tâches quotidiennes grâce à nos outils de gestion de flux de travail.</p>
                  <a class="read-more no-line" href="#">En savoir plus <span class="fas fa-long-arrow-alt-right"></span></a>
                </div>
              </div>
          
              <div class="card">
                  <div class="card-icon">
                    <span class="fas fa-file-alt"></span>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Dématérialisation des documents</h5>
                    <p>Réduisez la paperasse et accédez à vos documents en ligne à tout moment.</p>
                    <a class="read-more no-line" href="#">En savoir plus <span class="fas fa-long-arrow-alt-right"></span></a>
                  </div>
                </div>
            
                <div class="card">
                    
                    <div class="card-icon">
                      <span class="fas fa-chart-bar"></span>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Analyse et reporting</h5>
                      <p>Obtenez des insights précieux grâce à nos outils d'analyse et de reporting.</p>
                      <a class="read-more no-line" href="#">En savoir plus <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div>
                  </div>
                </div>
          </div>
     </div>
</div> 
<div id="details" class="basic-1">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 col-xl-7">
              <div class="image-container">
                  <img class="img-fluid" :src="'/assets/images/details-1.png'" alt="alternative" />
              </div> 
          </div> 
          <div class="col-lg-6 col-xl-5">
              <div class="text-container">
                  <div class="section-title">À propos de nous</div>
                  <h2>Simplifiez votre quotidien professionnel</h2>
                  <p>Notre plateforme est conçue pour optimiser vos tâches administratives et vous permettre de vous concentrer sur l'essentiel. Grâce à nos outils intuitifs et efficaces, vous pourrez gérer vos documents, planifier vos tâches, et suivre vos projets avec facilité.</p>
                  <a class="btn-solid-reg" href="#contact">Contactez-nous</a>
              </div> 
          </div> 
      </div>
  </div> 
</div>
<div id="features" class="accordion-1">
  <div class="container">
      <div class="row">
          <div class="col-xl-12">
              <h2 class="h2-heading">Gestion bureau d'ordre</h2>
              <p class="p-heading">Optimisez la gestion de vos documents et courriers grâce à notre solution intuitive. Centralisez vos archives, accédez facilement à vos documents, et traitement des courriers. Gagnez en efficacité et réduisez les coûts associés à la gestion papier.</p>
          </div> 
      </div>   
      <div class="row">
          <div class="col-xl-5">
              <div class="accordion" id="accordionExample">
                  
                 
                  <div class="accordion-item">
                      <div class="accordion-icon">
                          <span class="fas fa-tv"></span>
                      </div> 
                      <div class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Gestion de documents
                          </button>
                      </div>
                  </div>
                 
                 
                  <div class="accordion-item">
                      <div class="accordion-icon blue">
                          <span class="fas fa-microphone"></span>
                      </div> 
                      <div class="accordion-header" id="headingTwo">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Gestion de courriers
                          </button>
                      </div>
                  </div>
                  <div class="accordion-item">
                      <div class="accordion-icon purple">
                          <span class="fas fa-video"></span>
                      </div> 
                      <div class="accordion-header" id="headingThree">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Analyse et reporting
                          </button>
                      </div>
                      
                  </div>
                 
                  <div class="accordion-item">
                      <div class="accordion-icon orange">
                          <span class="fas fa-tools"></span>
                      </div> 
                      <div class="accordion-header" id="headingFour">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Dématérialisation des documents
                          </button>
                      </div>
                  </div>
                 
              </div> 
          </div> 
          <div class="col-xl-7">
              <div class="image-container">
                  <img class="img-fluid" :src="'/assets/images/features-dashboard.png'" alt="alternative"/>
              </div> 
          </div> 
      </div>
  </div> 
</div> 
<div class="cards-2 bg-gray">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <h2 class="h2-heading">Témoignages clients</h2>
          </div> 
      </div>
      <div class="row">
          <div class="col-lg-12">
              
              <div class="card">
                <img class="quotes" :src="'/assets/images/quotes.svg'" alt="alternative" />
                <div class="card-body">
                  <p class="testimonial-text">"Notre entreprise a considérablement amélioré son efficacité grâce à cette plateforme. La gestion des tâches et des documents est désormais un jeu d'enfant."</p>
                  <div class="testimonial-author">Pierre Dupont</div>
                  <div class="occupation">Directeur général, Entreprise X</div>
                </div>
                <div class="gradient-floor red-to-blue"></div>
              </div>
            
              <div class="card">
                  <img class="quotes" :src="'/assets/images/quotes.svg'" alt="alternative" />
                  <div class="card-body">
                    <p class="testimonial-text">"Depuis que nous utilisons cette plateforme, notre équipe est beaucoup plus productive. L'interface est intuitive et facile à prendre en main, même pour les moins technophiles d'entre nous. Je recommande vivement cette solution à toute entreprise cherchant à optimiser sa gestion quotidienne."</p>
                    <div class="testimonial-author">Léa Martin</div>
                    <div class="occupation">Assistante de direction, Société ABC</div>
                  </div>
                  <div class="gradient-floor red-to-blue"></div>
                </div>
              
                <div class="card">
                    <img class="quotes" :src="'/assets/images/quotes.svg'" alt="alternative" />
                    <div class="card-body">
                      <p class="testimonial-text">"Grâce cette plateforme, la collaboration au sein de notre équipe s'est considérablement améliorée. Tout le monde a accès aux mêmes informations en temps réel, ce qui facilite grandement la gestion de nos projets. Nous avons gagné un temps précieux grâce à l'automatisation de nombreuses tâches." </p>
                      <div class="testimonial-author">Thomas Durand</div>
                      <div class="occupation">Chef d'équipe, Agence de communication</div>
                    </div>
                    <div class="gradient-floor red-to-blue"></div>
                </div>
          </div> 
      </div>
  </div> 
</div> 

<div class="basic-3">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="text-container">
                  <h2>Prêt à révolutionner votre gestion de bureau d'ordre ?</h2>
                  <p class="p-large">Contactez-nous dès aujourd'hui pour tester notre plateforme gratuitement.</p>
                  <a class="btn-solid-lg" href="#contact">Contactez-nous</a>
              </div> 
          </div> 
      </div>
  </div> 
</div> 
<div id="contact" class="form-1">
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <div class="text-container">
                  <div class="section-title">Demandez votre démo gratuite</div>
                  <p>Expérimentez une nouvelle façon de gérer votre bureau d'ordre. Contactez-nous pour une démonstration gratuite et découvrez comment notre plateforme peut vous aider.</p>
              </div> 
          </div> 
          <div class="col-lg-6">
             
              <form>
                  <div class="form-group">
                      <input type="text" class="form-control-input" placeholder="Nom Complet" required />
                  </div>
                  <div class="form-group">
                      <input type="email" class="form-control-input" placeholder="Email" required />
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control-input" placeholder="industrie" required />
                  </div>
                  <div class="form-group">
                      <button type="submit" class="form-control-submit-button">Soumettre</button>
                  </div>
              </form>
            
          </div> 
      </div>
  </div> 
</div>
<div class="footer bg-gray">
  <img class="decoration-circles" :src="'/assets/images/decoration-circles.png'" alt="alternative" />
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <h4>Découvrez nos autres solutions</h4>
              <div class="social-container">
                  <span class="fa-stack">
                      <a href="#your-link">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fab fa-facebook-f fa-stack-1x"></i>
                      </a>
                  </span>
                  <span class="fa-stack">
                      <a href="#your-link">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fab fa-twitter fa-stack-1x"></i>
                      </a>
                  </span>
                  <span class="fa-stack">
                      <a href="#your-link">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fab fa-pinterest-p fa-stack-1x"></i>
                      </a>
                  </span>
                  <span class="fa-stack">
                      <a href="#your-link">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fab fa-instagram fa-stack-1x"></i>
                      </a>
                  </span>
                  <span class="fa-stack">
                      <a href="#your-link">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fab fa-youtube fa-stack-1x"></i>
                      </a>
                  </span>
              </div> 
          </div> 
      </div>
  </div> 
</div> 
<div class="copyright bg-gray">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
              <ul class="list-unstyled li-space-lg p-small">
                  <li><a href="#">Article Details</a></li>
                  <li><a href="#">Terms & Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
              </ul>
          </div> 
          <div class="col-lg-3 col-md-12 col-sm-12">
              <p class="p-small statement">Copyright © <a href="#">2024 </a></p>
          </div> 
      </div> 
  </div> 
</div>


</template>



<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
.accordion-body{
    color: #fff !important;
}
</style>
<script>
export default {
    methods:{
        redirectToLogin(){
            window.location.href='http://127.0.0.1:8000/login'
        }
    }
}
</script>
