@extends('blog.layouts.base')
@section('description', 'Descrição da página Contato')
@section('titulo', 'Contato')

@section('conteudo')

    <section id="contact" class="contact mb-5">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">Entre em Contato</h1>
                </div>
            </div>

            {{-- Icones redes sociais --}}
            <div class="row gy-4">

                <div class="col-md-4">
                    <div class="info-item">
                        <a href="https://www.linkedin.com/in/guilherme-ruziska/">
                            <i class="bi bi-linkedin"></i>
                            <h3>LinkedIn</h3>
                        </a> 
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-4">
                    <div class="info-item info-item-borders">
                        <a href="https://github.com/GuilhermeRuziskaF">
                            <i class="bi bi-github"></i>
                            <h3>GitHub</h3>
                        </a>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-4">
                    <div class="info-item">
                        <a href="http://">
                            <i class="bi bi-instagram"></i>
                            <h3>Instagram</h3>
                        </a>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <div class="form mt-5">

                {{-- Formulário --}}
                <form action="" method="post" role="form" class="php-email-form">

                    {{-- Nome e Email --}}
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" required>
                        </div>
                    </div>

                    {{-- Assunto --}}
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            required>
                    </div>

                    {{-- Mensagem --}}
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>

                    <div class="text-center"><button type="submit">Enviar</button></div>
                </form>
            </div><!-- End Contact Form -->

        </div>
    </section>

@endsection
