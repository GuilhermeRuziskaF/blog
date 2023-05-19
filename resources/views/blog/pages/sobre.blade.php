@extends('blog.layouts.base')
@section('description', 'Descrição da página sobre')
@section('titulo', 'Sobre')

@section('conteudo')

    <section>
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">Sobre</h1>
                </div>
            </div>

            <div class="row mb-5">

                <div class="d-md-flex post-entry-2 half">
                    <a href="#" class="me-4 thumbnail">
                        
                        <img src="{{asset('blog/assets/img/post-landscape-2.jpg')}}" alt="" class="img-fluid">
                    </a>
                    <div class="ps-md-5 mt-4 mt-md-0">
                        <div class="post-meta mt-4">Sobre</div>
                        <h2 class="mb-4 display-4">Guilherme Ruziska</h2>

                        <p>
                            Bem vindo! estou empolgado em recebê-lo no meu blog pessoal. Sou estudante de Análise e Desenvolvimento de Sistemas
                            e sou apaixonado pelo mundo da programação e desenvolvimento web.</p>

                        <p>
                            Este blog foi criado para compartilhar meu conhecimento e experiência com você. Aqui, você encontrará uma variedade de conteúdos relacionados ao desenvolvimento web, dicas práticas, tutoriais passo a passo e insights sobre as tecnologias que mais me fascinam.
                        </p>
                    </div>
                </div>

                <div class="d-md-flex post-entry-2 half mt-5">
                    <a href="#" class="me-4 thumbnail order-2">
                        <img src="{{asset('blog/assets/img/post-landscape-1.jpg')}}" alt="" class="img-fluid">
                    </a>
                    <div class="pe-md-5 mt-4 mt-md-0">
                        <h2 class="mb-4 display-4">Missão</h2>

                        <p>
                            Acredito que a tecnologia tem o poder de transformar vidas e impulsionar negócios. Minha missão é tornar a programação mais acessível e compreensível para todos, independentemente de seu nível de experiência. Quero ajudá-lo a desvendar o mundo do desenvolvimento web e capacitá-lo a criar projetos incríveis.
                        </p>

                        <p>
                            Fique à vontade para explorar o conteúdo do blog, deixar seus comentários e entrar em contato comigo para qualquer dúvida, sugestão ou oportunidade de colaboração. Juntos, podemos construir uma comunidade de aprendizado e crescimento.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection
