@extends('layouts.main')

@section('container')
            <!-- HUBUNGI -->
            <section id="hubungi" class="full-height px-lg-5">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-8 pb-4" data-aos="fade-up">
                            <h1 class="text-brand">HUBUNGI SAYA</h1>
                        </div>
                        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
                            <form action="#" class="row g-lg-3 gy-3">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Nama lengkap...">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" placeholder="Email...">
                                </div>
                                <div class="form-group col-12">
                                    <input type="text" class="form-control" placeholder="Judul...">
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="" rows="4" class="form-control" placeholder="Masukan pesan disini..."></textarea>
                                </div>
                                <div class="form-group col-12 d-grid">
                                    <button type="submit" class="btn btn-brand">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- //HUBUNGI -->
@endsection