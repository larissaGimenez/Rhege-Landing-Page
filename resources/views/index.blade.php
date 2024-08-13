<!DOCTYPE html>
<html lang="pt-br" class="theme_switchable">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RHEGE - Consultoria em RH</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    
    <!-- Navbar -->
<header id="header">
    <div class="container-nav">
        <div class="flex-nav">
            <a href="#"><img class="logonav" src="css/images/logo.png" alt="logo"></a>
            <nav>
                <ul id="nav_list">
                    <li class="nav-item"><a href="#home">INÍCIO</a></li>
                    <li class="nav-item"><a href="#service">SERVIÇOS</a></li>
                    <li class="nav-item"><a href="#about">SOBRE NÓS</a></li>
                    <li class="nav-item"><a href="#download">DOWNLOADS</a></li>
                </ul>
            </nav>
            <div class="btn-contato">
                <a href="https://api.whatsapp.com/send?phone=5519988358281"><button>CONTATO</button></a>
            </div>
        </div>
    </div>
</header>
        
    <section class="banner">
        <h1>DESCUBRA O NOVO RH</h1>
    </section>

    <!-- Services Section -->
    <section id="services" class="text-center py-5">
        <div class="container section-one">
            <h2 class="mb-4">Nossos Serviços</h2><br>
            <div class="row">
                <!-- Service 1 -->
                <div class="col-md-3 mb-4 d-flex align-items-stretch">
                    <div class="service-card flex-fill">
                        <i class="fas fa-chart-line fa-3x mb-3"></i>
                        <h4>Diagnóstico Organizacional</h4>
                        <p>Análise detalhada da empresa</p>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-md-3 mb-4 d-flex align-items-stretch">
                    <div class="service-card flex-fill">
                        <i class="fas fa-building fa-3x mb-3"></i>
                        <h4>Estruturação de RH</h4>
                        <p>Como está construída a base da empresa?</p>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-md-3 mb-4 d-flex align-items-stretch">
                    <div class="service-card flex-fill">
                        <i class="fas fa-users fa-3x mb-3"></i>
                        <h4>Treinamento e Desenvolvimento</h4>
                        <p>Transformamos pessoas através do conhecimento</p>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="col-md-3 mb-4 d-flex align-items-stretch">
                    <div class="service-card flex-fill">
                        <i class="fas fa-search fa-3x mb-3"></i>
                        <h4>Recrutamento e Seleção</h4>
                        <p>Conectando as expectativas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container section-two">
            <div class="row">
                <div class="col-md-6">
                    <h2>Sobre Nós</h2>
                    <p>Uma consultoria de RH especializada em gestão de talentos, desenvolvimento organizacional e facilitação de processos
                        de mudança, sempre mantendo alinhamento com os objetivos e necessidades do negócio.</p>
                    <p>Nossa missão é criar valor e fazer a diferença na vida de nossos clientes, oferecendo serviços de alta qualidade e suporte excepcional.</p>
                </div>
                <div class="col-md-6">
                    <img src="/images/body1.png" alt="Sobre nós" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    

    <!-- Flexcards Section -->
    <section id="clients" class="text-center py-5">
    <h2 class="mb-4">Nosso Trabalho</h2><br>
        <div class="container section-three">
            <div class="carousel">
                <div class="carousel-wrapper">
                    <div class="carousel-slide">
                        <img src="images/grid1.jpg" alt="Imagem 1">
                        <div class="caption">
                            <p class="company-name">Nome da Empresa</p>
                            <p class="work-description">Descrição do Trabalho</p>
                        </div>
                    </div>
                    <div class="carousel-slide">
                        <img src="images/grid1.jpg" alt="Imagem 1">
                        <div class="caption">
                            <p class="company-name">Nome da Empresa</p>
                            <p class="work-description">Descrição do Trabalho</p>
                        </div>
                    </div>
                    <div class="carousel-slide">
                        <img src="images/grid1.jpg" alt="Imagem 1">
                        <div class="caption">
                            <p class="company-name">Nome da Empresa</p>
                            <p class="work-description">Descrição do Trabalho</p>
                        </div>
                    </div>
    <!-- Adicione mais imagens conforme necessário -->
  </div>
  <button class="carousel-prev">&lt;</button>
  <button class="carousel-next">&gt;</button>
</div>

        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container section-four">
            <h2 class="text-center">Contato</h2>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" placeholder="Seu nome">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Seu email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject">Assunto</label>
                    <input type="text" class="form-control" id="subject" placeholder="Assunto">
                </div>
                <div class="form-group">
                    <label for="message">Mensagem</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Sua mensagem"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container section-five">
            <p>&copy; 2024 Minha Empresa. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
