@yield('header', view('layouts.blocks.header.header'))
@yield('navbar', view('layouts.navbar'))
<div class="faq-page">
    <div class="container">
        <h1>Вопросы и ответы (FAQ)</h1>
        <h4>О сайте и его содержимом</h4>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Что такое фанфик?
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p>Фанфик — история, написанная поклонниками любого произведения (например, фильма, сериала или книги), в которой используются персонажи, мир и другие элементы этого произведения. За подробностями проследуйте в <a href="https://ru.wikipedia.org/wiki/%D0%A4%D0%B0%D0%BD%D1%84%D0%B8%D0%BA" class="text-primary">википедию</a>.</p>
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Что такое «Книга Фанфиков»?
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p>«Книга Фанфиков» — сайт, созданный для того, чтобы авторам фанфиков и читателям было проще найти друг друга. Каждый может выставить у нас свою работу и прочитать тысячи текстов, выставленных другими. У сайта также есть <a href="/mission" class="text-primary">миссия</a>, которой создатели и пользователи стараются придерживаться.</p>
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Метки, рейтинги, направленность — я ничего во всем этом не понимаю!
                </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p>Не нужно переживать, с этим сталкивается каждый начинающий читатель и писатель. Щелкните на непонятный термин, чтобы увидеть подсказку.</p>
                    <p>На нашем канале на YouTube есть замечательная серия роликов «<a href="https://www.youtube.com/watch?v=f13Xv9ZV4XQ&list=PLPWUraAalXkewkXzSpKLOAokA3A3yOOih" class="text-primary">Поясни за термин</a>», которая весело и интересно рассказывает об основных терминах.</p>
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Как найти фанфик, который может быть мне интересен?
                </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p>Скорее всего, вам будет интересно прочитать фанфики по известным вам фэндомам. Любите какой-то сериал, книгу, фильм, аниме? Загляните в раздел с фэндомами, чтобы прочитать истории о полюбившихся персонажах.</p>
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    Что означают числа рядом с названием работы, например <sup>10</sup> или <sup>5</sup>?
                </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p><span>10</span> — это суммарная оценка, поставленная работе читателями. Если работу ещё не оценили, то рядом с ней будет цифра 0. Если числа нет вообще, это значит, что автор отключил возможность ставить оценки этой работе.</p>
                    <p><span>5</span> — это количество наград, подаренных работе читателями. Если у работы нет наград, то число отображаться не будет.</p>
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    Что означает надпись <sup>Горячая работа!</sup> рядом с названием работы, как получить такую же?
                </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p>Любой автор может поместить свою работу в категорию «Горячая работа» в качестве особой (платной) услуги. «Горячая работа» будет показываться в специальном блоке на главной странице, в специальных списках по фандому и метке, в начале списков фанфиков и результатах поиска. Кроме дополнительных просмотров, автор получит возможность бесплатно наградить отзывы к своим работам и анкету с оценками вместо обычной формы отзывов. «Горячая работа» — лучший способ рассказать миру о своей работе!</p>
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                    Что означает надпись <sup>Горячая заявка!</sup> рядом с названием заявки, как получить такую же?
                </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p>Любой пользователь может сделать заявку «горячей» в качестве особой (платной) услуги. Заявка, которая является «горячей», будет показываться в специальном блоке на главной странице и в начале списков всех заявок. «Горячая заявка» — лучший способ рассказать миру об интересной заявке!</p>
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                    Что означает надпись <sup>Эта работа была награждена за грамотность</sup> в шапке, как получить такую же?
                </button>
                </h2>
                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p>Когда-то на сайте действовала пользовательская модерация, которая занималась проверкой работ на соотвествие правилам сайта и на общую грамотность. Работы, отвечавшие минимальным критериям грамотности (корректное оформление, меньше пяти ошибок на страницу и т.д.), награждались алмазом (). Народная модерация прекратила работу, поэтому новые работы больше не могут получить знак отличия. В работах, которые были проверены в прошлом, отметка осталась авторам на память.</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('footer', view('layouts.blocks.footer.footer'))    