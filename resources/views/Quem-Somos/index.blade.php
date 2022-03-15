@extends('Layouts.app')
@section('title', 'Quem Somos')
@section('body')

<div class="py-5 bg-light members">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-md-7 text-center">
                <h1 class="display-5 mb-3">Conheça nossa equipe</h1>
                <p class="lead">Os desenvolvedores desta aplicação.</p>
            </div>
        </div>
        <div class="row">
            <!-- column  -->
            <div class="col-lg-6">
                <div class="card shadow border-0 mb-4">
                    <!-- Row -->
                    <div class="row no-gutters">
                        <div class="col-md-5 pro-pic" style=" center center no-repeat">
                            <img id="avatar1" src="{{asset('assets/img/lorena.jpeg')}}"/>   
                            <canvas id="Canvas1" width="230px" height="230px"
                            style="border:1px solid;">
                            </canvas>
                        </div>
                        <div class="col-md-7 bg-white">
                            <div class="p-3">
                                <div class="mb-3">
                                    <h6>Lorena Albuquerque</h6>
                                    <small class="text-muted">Desenvolvedor e CEO</small>
                                </div>
                                <p>
                                    Lorena é estudante do 3º ano do curso Técnico em Informática Integrado ao Ensino Médio
                                    no IFPB-CG. 
                                </p>
                                <div class="col-md-12 text-center">
                                    <ul class="social-network social-circle">
                                        <li><a href="#" class="icoFacebook socialCircle" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="icoTwitter socialCircle" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="icoJoomla socialCircle" title="Joomla"><i class="fa fa-joomla"></i></a></li>
                                        <li><a href="#" class="icoLinkedin socialCircle" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row -->
                </div>
            </div> <!-- column  -->
            <div class="col-lg-6">
                <div class="card shadow border-0 mb-4">
                    <!-- Row -->
                    <div class="row no-gutters card-shadow">
                        <div class="col-md-5 pro-pic" style=" center center no-repeat">
                            <img id="avatar2" src="{{asset('assets/img/pedro.jpeg')}}"/>   
                            <canvas id="Canvas2" width="230px" height="230px"
                                style="border:1px solid;">
                            </canvas>
                        </div>
                        <div class="col-md-7 bg-white">
                            <div class="p-3">
                                <div class="mb-3">
                                    <h6>Pedro Lôbo</h6>
                                    <small class="text-muted">Desenvolvedor e CEO</small>
                                </div>
                                <p>
                                    Pedro é estudante do 3º ano do curso Técnico em Informática Integrado ao Ensino Médio
                                    no IFPB-CG. 
                                </p>
                                <div class="col-md-12 text-center">
                                    <ul class="social-network social-circle">
                                        <li><a href="#" class="icoFacebook socialCircle" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="icoTwitter socialCircle" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="icoJoomla socialCircle" title="Joomla"><i class="fa fa-joomla"></i></a></li>
                                        <li><a href="#" class="icoLinkedin socialCircle" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row -->
                </div>
            </div> <!-- column  -->
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow border-0 mb-4">
                    <!-- Row -->
                    <div class="row no-gutters">
                        <div class="col-md-5 pro-pic" style="center center no-repeat">
                            <img id="avatar3" src="{{asset('assets/img/victor.jpeg')}}"/>   
                            <canvas id="Canvas3" width="230px" height="230px"
                            style="border:1px solid;">
                            </canvas>
                        </div>
                        <div class="col-md-7 bg-white">
                            <div class="p-3">
                                <div class="mb-3">
                                    <h6>Victor Emanuel</h6>
                                    <small class="text-muted">Desenvolvedor e CEO</small>
                                </div>
                                <p>
                                    Victor é estudante do 3º ano do curso Técnico em Informática Integrado ao Ensino Médio
                                    no IFPB-CG. 
                                </p>
                                <div class="col-md-12 text-center">
                                    <ul class="social-network social-circle">
                                        <li>
                                          <a
                                          href="https://www.facebook.com/victoremanuel.barbosarodrigues/"
                                          class="icoFacebook socialCircle" title="Facebook" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#"
                                          class="icoTwitter socialCircle" title="Twitter" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="https://github.com/Victor-droid165"
                                          class="icoGithub socialCircle" title="Github" target="_blank">
                                            <i class="fa fa-github"></i>
                                          </a>
                                        </li>
                                        <li>
                                          <a 
                                          href="https://www.linkedin.com/in/victor-emanuel-barbosa-rodrigues-544114214"
                                          class="icoLinkedin socialCircle" title="Linkedin" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                          </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row -->
                </div>
            </div> <!-- column  -->
        </div>
    </div>
</div>


<script>
  for(let i = 1; i < 4; i++){
    let canvas = document.getElementById('Canvas' + i);
    let context = canvas.getContext('2d');
    let base_image = document.getElementById('avatar' + i);
    base_image.onload = function(){
      context.drawImage(base_image, 0, 0, 230, 230);
    }
    document.getElementById('avatar' + i).style.display='none';
  }
</script>
<!-- Credits:https://www.bootstrapchannel.com/snippet/65/team-members-section -->
@endsection