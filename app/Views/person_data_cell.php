<div class="card shadow border-0 mt-3 people-data-container">
    <div class="row">
        <div class="col-1 people-data-number">
            <h1 id="sno"><?= $personCount ?></h1>
        </div>
        <div class="col-11">
            <div class="row">
                <div class="col-12 people-data-name">
                    <ul class="list-inline pt-1">
                        <li class="list-inline-item">
                            <p><strong>Name: </strong></p>
                        </li>
                        <li class="list-inline-item">
                            <p id="name"><?= $name ?></p>
                        </li>
                    </ul>
                </div>
                <div class="col-12 people-data-location">
                    <ul class="list-inline pt-1">
                        <li class="list-inline-item">
                            <p><strong>Location: </strong></p>
                        </li>
                        <li class="list-inline-item">
                            <p id="location"><?= $location ?></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>