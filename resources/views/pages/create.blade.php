@extends('layouts.app_home')

 @Section('content')
     <!-- Page top section -->
     <section class="page-top-section set-bg" data-setbg="{{ asset('img/page-top-bg.jpg') }}">
         <div class="container text-white">
             <h2>Ajouter Un Bien</h2>
         </div>
     </section>
     <!--  Page top end -->

     <!-- Breadcrumb -->
     <div class="site-breadcrumb">
         <div class="container">
             <a href=""><i class="fa fa-home"></i>Home</a>
             <span><i class="fa fa-angle-right"></i>Featured Listings</span>
         </div>
     </div>
        <div class="container">
            <form class="needs-validation" method="post"   action="{{ route('properties.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                        <input type="hidden" name="user_id"  class="form-control @error('title') is-invalid @enderror"
                               id="title" value="{{ auth()->user()->id }}">
                    <div class="col-md-4 mb-3">
                        <label for="title">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="First name" >
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="surface">Surface</label>
                        <input type="number" class="form-control @error('surface') is-invalid @enderror" id="surface" name="surface" placeholder="Surface" >
                       @error('surface')
                        <div class="invalid-feedback">
                            {{ $errors->first('surface') }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="place">Place</label>
                        <input type="text" class="form-control @error('place') is-invalid @enderror" id="place" name="place" placeholder="Last name"  >
                        @error('place')
                        <div class="invalid-feedback">
                            {{ $errors->first('place') }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="city">City</label>
                        <input type="text" class="form-control @error('city') is-invalid @enderror"  name="city" id="city" placeholder="City"  >
                        @error('city')
                        <div class="invalid-feedback">
                            {{ $errors->first('city') }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="chambre">chambre</label>
                        <input type="number" class="form-control @error('chambre') is-invalid @enderror" name="chambre" id="chambre" placeholder="chambre"  >
                        @error('chambre')
                        <div class="invalid-feedback">
                            {{ $errors->first('chambre') }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="garage">Garage</label>
                        <input type="number" name="garage" class="form-control @error('garage') is-invalid @enderror" id="garage" placeholder="garage"  >
                        @error('garage')
                        <div class="invalid-feedback">
                            {{ $errors->first('garage') }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="douche">Douche</label>
                        <input type="number" class="form-control @error('douche') is-invalid @enderror" id="douche" name="douche" placeholder="douche"  >
                        @error('douche')
                        <div class="invalid-feedback">
                            {{ $errors->first('douche') }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="prix">Prix</label>
                        <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" id="prix" placeholder="Prix" >
                        @error('price')
                        <div class="invalid-feedback">
                            {{ $errors->first('price') }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="image">Image</label>
                        <input type="file" name="image[]" class="form-control @error('image') is-invalid @enderror"  id="image" placeholder="Image" multiple >
                        @error('image')
                        <div class="invalid-feedback">
                            {{ $errors->first('image') }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="image">Image de la maison</label>
                        <input type="file" name="affiche" class="form-control @error('affiche') is-invalid @enderror"  id="affiche" placeholder="affiche" >
                        @error('affiche')
                        <div class="invalid-feedback">
                            {{ $errors->first('affiche') }}
                        </div>
                        @enderror
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Enregistre</button>
            </form>
            <div class="clients-section mt-5">
                <div class="container">
                    <div class="clients-slider owl-carousel">
                        <a href="#">
                            <img src="{{ asset('img/partner/1.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('img/partner/2.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('img/partner/3.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('img/partner/4.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('img/partner/5.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation');
                        // Loop over them and prevent submission
                        var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                            }, false);
                        });
                    }, false);
                })();
            </script>
        </div>
@stop
