<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Design System - Free Design System for Bootstrap 4</title>
    @include('links.headLinks')
</head>

<body>
    @if(1 == 0)
        @include('footAndHead.headerUser')
    @else
        @include('footAndHead.headerWelcome')
    @endif
    <main>
        <section class="section bg-secondary">
            <div class="container">
                <div class="row row-grid align-items-center">
                   
                    <div class="col-md-6">
                        <div class="section pl-md-5">
                           
                            <h3>Our customers</h3>
                            <p class="lead">Don't let your uses guess by attaching tooltips and popoves to any element. Just make sure you enable them first via JavaScript.</p>
                            <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
                            <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
                            <a href="#" class="font-weight-bold text-warning mt-5">A beautiful UI Kit for impactful websites</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    @include('footAndHead.footer')
    @include('links.footLinks')
</body>

</html>
