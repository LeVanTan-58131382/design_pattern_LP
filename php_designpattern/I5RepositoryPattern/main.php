<!doctype html>
<html lang="en">

<head>
    <title>Factory Pattern</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/svg.js/2.3.6/svg.js"></script>
    <script src="https://ariutta.github.io/svg-pan-zoom/dist/svg-pan-zoom.js"></script>
    <style>
        h1,
        h3,
        h4,
        h5 {
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">Design Pattern</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Creational Pattern</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item active" href="../1-factory/main.php">1. Factory Pattern</a>
                        <a class="dropdown-item" href="../3-singleton/main.php">2. Singleton Pattern</a>
                        <a class="dropdown-item" href="../5-prototype/main.php">3. Prototype Pattern</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Structural Pattern</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="../7-bridge/main.php">1. Bridge Pattern</a>
                        <a class="dropdown-item" href="../28-composite-entity/main.php">2. Composite Pattern</a>
                        <a class="dropdown-item" href="../11-facade/main.php">3. Facade Pattern</a>
                        <a class="dropdown-item" href="../13-proxy/main.php">4. Proxy Pattern</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Behavioral Pattern</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="../15-command/main.php">1. Command Pattern</a>
                        <a class="dropdown-item" href="../17-iterator/main.php">2. Iterator Pattern</a>
                        <a class="dropdown-item" href="../19-memento/main.php">3. Memento Pattern</a>
                        <a class="dropdown-item" href="../21-state/main.php">4. State Pattern</a>
                        <a class="dropdown-item" href="../23-stratery/main.php">5. Strategy Pattern</a>
                        <a class="dropdown-item" href="../25-visitor/main.php">6. Visitor Pattern</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Others</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="../27-delegate/main.php">1. Business Delegate Pattern</a>
                        <a class="dropdown-item" href="../29-data-access-object/main.php">2. Data Access Object Pattern</a>
                        <a class="dropdown-item" href="../31-intercepting-filter/main.php">3. Intercepting Filter Pattern</a>
                        <a class="dropdown-item" href="../33-transfer-object/main.php">4. Transfer Object Pattern</a>
                        <a class="dropdown-item" href="../34-repository/main.php">5. Repository Pattern</a>
                    </div>
                </li>

                <a class="nav-link" href="../DesignPattern.html">Full Diagram</a>

            </ul>
        </div>
    </nav>
    <div class="container-fuild">
        <h3><strong>I5 Repository Pattern</strong></h3>
        <div class="row">
            <div class="col-sm-10">
                <img src="PackageDiagram.svg" alt="">
            </div>
            <div class="col-sm-2">
                <button onclick="showImage('Contracts.svg')" type="button" class="btn btn-primary">Contracts</button>
                <button onclick="showImage('Criteria.svg')" type="button" class="btn btn-primary">Criteria</button>
                <button onclick="showImage('Eloquent.svg')" type="button" class="btn btn-primary">Eloquent</button>
                <button onclick="showImage('Events.svg')" type="button" class="btn btn-primary">Events</button>
                <button onclick="showImage('Exceptions.svg')" type="button" class="btn btn-primary">Exceptions</button>
                <button onclick="showImage('Generators.svg')" type="button" class="btn btn-primary">Generators</button>
                <button onclick="showImage('Generators.Commands.svg')" type="button" class="btn btn-primary">Generators.Commands</button>
                <button onclick="showImage('Generators.Migrations.svg')" type="button" class="btn btn-primary">Generators.Migrations</button>
                <button onclick="showImage('Helpers.svg')" type="button" class="btn btn-primary">Helpers</button>
                <button onclick="showImage('Listeners.svg')" type="button" class="btn btn-primary">Listeners</button>
                <button onclick="showImage('Presenter.svg')" type="button" class="btn btn-primary">Presenter</button>
                <button onclick="showImage('Providers.svg')" type="button" class="btn btn-primary">Providers</button>
                <button onclick="showImage('Traits.svg')" type="button" class="btn btn-primary">Traits</button>
                <button onclick="showImage('Transformer.svg')" type="button" class="btn btn-primary">Transformer</button>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
        Launch
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" style="max-width:100%" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div id="drawing" class="drawing"></div>
                </div>

            </div>
        </div>
    </div>

    <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM

        });
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        // https://github.com/svgdotjs/svg.js
        // https://github.com/ariutta/svg-pan-zoom
        var mySVG = SVG('drawing').size(500, 300).attr('id', 'svg-container').addClass('svg-container');
        var myGroup = mySVG.group().attr('id', 'grpDots');
        console.log('mySVG');
        console.log(mySVG);
        console.log(' --- ');


        
        myCircle.svg = '../Contracts.svg';
        var panZoomInstance = svgPanZoom('#svg-container', {
            //zoomEnabled: true,
            //controlIconsEnabled: true,
            //fit: true,
            //center: true,
            //minZoom: 0.1

            //viewportSelector: '.svg-pan-zoom_viewport',
            panEnabled: true,
            controlIconsEnabled: false,
            zoomEnabled: true,
            dblClickZoomEnabled: true,
            mouseWheelZoomEnabled: true,
            preventMouseEventsDefault: true,
            zoomScaleSensitivity: 0.2,
            minZoom: 0.5,
            maxZoom: 3,
            fit: false,
            contain: false,
            center: false,
            refreshRate: 'auto',
            //beforeZoom: function(){},
            //onZoom: function(){},
            //beforePan: function(){},
            //onPan: function(){},
            onPan: function(evt) {
                test(evt);
                //console.log(myGroup.node.transform.baseVal[0].matrix.e);
                //console.log(' ----------------- ');
            },
            //customEventsHandler: {},
            eventsListenerElement: null
        });

        function test(evt) {
            console.log(evt);
        }

        (document.getElementById('reset')).addEventListener("click", function(event) {
            panZoomInstance.reset();
        });

        (document.getElementById('corner')).addEventListener("click", function(event) {
            var currentZoom = panZoomInstance.getZoom();
            panZoomInstance.pan({
                x: -50 * currentZoom,
                y: -120 * currentZoom
            });
        });
    </script>
</body>

</html>