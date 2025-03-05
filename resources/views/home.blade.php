


@section('title')
    La station 2.0
@endsection

<div id="weatherCarousel" class="carousel carousel-dark slide m-5">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#weatherCarousel" data-bs-slide-to="0" class="active bg-secondary" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#weatherCarousel" data-bs-slide-to="1" class="bg-secondary" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#weatherCarousel" data-bs-slide-to="2" class="bg-secondary" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner rounded-5">
        <div class="carousel-item active" data-bs-interval="2000">
            <div class="d-flex justify-content-between align-items-center px-5 gradient-custom" style="height: 230px">
                <div>
                    <h2 class="text-dark display-2"><strong>6°C</strong></h2>
                    <p class="text-dark mb-0">Lyon, France</p>
                </div>
                <div>
                    <img src="ilu3.webp" width="150px">
                </div>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <div class="d-flex justify-content-around text-center align-items-center px-5 bg-body-tertiary" style="height: 230px">
                <div class="flex-column">
                    <p class="small"><strong>21°C</strong></p>
                    <i class="fas fa-sun fa-2x mb-3" style="color: #ddd;"></i>
                    <p class="mb-0"><strong>12:00</strong></p>
                    <p class="mb-0 text-muted" style="font-size: .65rem;">PM</p>
                </div>
                <div class="flex-column">
                    <p class="small"><strong>2°C</strong></p>
                    <i class="fas fa-sun fa-2x mb-3" style="color: #ddd;"></i>
                    <p class="mb-0"><strong>1:00</strong></p>
                    <p class="mb-0 text-muted" style="font-size: .65rem;">PM</p>
                </div>
                <div class="flex-column">
                    <p class="small"><strong>20°C</strong></p>
                    <i class="fas fa-cloud fa-2x mb-3" style="color: #ddd;"></i>
                    <p class="mb-0"><strong>2:00</strong></p>
                    <p class="mb-0 text-muted" style="font-size: .65rem;">PM</p>
                </div>
                <div class="flex-column">
                    <p class="small"><strong>19°C</strong></p>
                    <i class="fas fa-cloud fa-2x mb-3" style="color: #ddd;"></i>
                    <p class="mb-0"><strong>3:00</strong></p>
                    <p class="mb-0 text-muted" style="font-size: .65rem;">PM</p>
                </div>
                <div class="flex-column">
                    <p class="small"><strong>18°C</strong></p>
                    <i class="fas fa-cloud-showers-heavy fa-2x mb-3" style="color: #ddd;"></i>
                    <p class="mb-0"><strong>4:00</strong></p>
                    <p class="mb-0 text-muted" style="font-size: .65rem;">PM</p>
                </div>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <div class="d-flex justify-content-around text-center align-items-center px-5 bg-body-tertiary" style="height: 230px">
                <div class="flex-column">
                    <p class="small"><strong>21°C</strong></p>
                    <i class="fas fa-sun fa-2x mb-3" style="color: #ddd;"></i>
                    <p class="mb-0"><strong>Mon</strong></p>
                </div>
                <div class="flex-column">
                    <p class="small"><strong>20°C</strong></p>
                    <i class="fas fa-sun fa-2x mb-3" style="color: #ddd;"></i>
                    <p class="mb-0"><strong>Tue</strong></p>
                </div>
                <div class="flex-column">
                    <p class="small"><strong>16°C</strong></p>
                    <i class="fas fa-cloud fa-2x mb-3" style="color: #ddd;"></i>
                    <p class="mb-0"><strong>Wed</strong></p>
                </div>
                <div class="flex-column">
                    <p class="small"><strong>17°C</strong></p>
                    <i class="fas fa-cloud fa-2x mb-3" style="color: #ddd;"></i>
                    <p class="mb-0"><strong>Thu</strong></p>
                </div>
                <div class="flex-column">
                    <p class="small"><strong>18°C</strong></p>
                    <i class="fas fa-cloud-showers-heavy fa-2x mb-3" style="color: #ddd;"></i>
                    <p class="mb-0"><strong>Fri</strong></p>
                </div>
            </div>
        </div>
    </div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
