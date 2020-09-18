@extends('layouts.account')
@section('accountcontent')
<!-- Page content -->
<div class="page-content">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- Page title -->
            <div class="page-title">
                <div class="row justify-content-between align-items-center">
                    <div
                        class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0">
                        <!-- Page title + Go Back button -->
                        <div class="d-inline-block">
                            <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Help Center</h5>
                        </div>
                        <!-- Additional info -->
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-end">
                    </div>
                </div>
            </div>
            <!-- Faq -->
            <div class="row mb-4">
                <div class="col-12">
                    <div id="accordion-1" class="accordion accordion-stacked">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header d-flex py-4" id="heading-1-1" data-toggle="collapse" role="button"
                                data-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                                <h6 class="font-weight-400 mb-0">Which license do I need?</h6>
                                <span class="text-muted text-sm ml-auto pr-5 d-none d-md-block">3 months ago</span>
                            </div>
                            <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1"
                                data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et.</p>
                                    <div class="py-4">
                                        <h6 class="">Did you find this article helpful?</h6>
                                        <form class="d-flex justify-content-between">
                                            <div>
                                                <button class="btn btn-xs btn-secondary" type="submit"><i
                                                        class="fas fa-thumbs-up"></i>
                                                </button>
                                                <button class="btn btn-xs btn-secondary" type="submit"><i
                                                        class="fas fa-thumbs-down"></i>
                                                </button>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-xs btn-secondary rounded-pill">Contact
                                                    Support</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 2 -->
                        <div class="card">
                            <div class="card-header d-flex py-4" id="heading-1-2" data-toggle="collapse" role="button"
                                data-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                                <h6 class="font-weight-400 mb-0">How do I get access to a theme?</h6>
                                <span class="text-muted text-sm ml-auto pr-5 d-none d-md-block">3 months ago</span>
                            </div>
                            <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2"
                                data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et.</p>
                                    <div class="py-4">
                                        <h6 class="">Did you find this article helpful?</h6>
                                        <form class="d-flex justify-content-between">
                                            <div>
                                                <button class="btn btn-xs btn-secondary" type="submit"><i
                                                        class="fas fa-thumbs-up"></i>
                                                </button>
                                                <button class="btn btn-xs btn-secondary" type="submit"><i
                                                        class="fas fa-thumbs-down"></i>
                                                </button>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-xs btn-secondary rounded-pill">Contact
                                                    Support</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        <div class="card">
                            <div class="card-header d-flex py-4" id="heading-1-3" data-toggle="collapse" role="button"
                                data-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                                <h6 class="font-weight-400 mb-0">How do I see previous orders?</h6>
                                <span class="text-muted text-sm ml-auto pr-5 d-none d-md-block">3 months ago</span>
                            </div>
                            <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3"
                                data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et.</p>
                                    <div class="py-4">
                                        <h6 class="">Did you find this article helpful?</h6>
                                        <form class="d-flex justify-content-between">
                                            <div>
                                                <button class="btn btn-xs btn-secondary" type="submit"><i
                                                        class="fas fa-thumbs-up"></i>
                                                </button>
                                                <button class="btn btn-xs btn-secondary" type="submit"><i
                                                        class="fas fa-thumbs-down"></i>
                                                </button>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-xs btn-secondary rounded-pill">Contact
                                                    Support</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 4 -->
                        <div class="card">
                            <div class="card-header d-flex py-4" id="heading-1-4" data-toggle="collapse" role="button"
                                data-target="#collapse-1-4" aria-expanded="false" aria-controls="collapse-1-4">
                                <h6 class="font-weight-400 mb-0">Which license do I need?</h6>
                                <span class="text-muted text-sm ml-auto pr-5 d-none d-md-block">3 months ago</span>
                            </div>
                            <div id="collapse-1-4" class="collapse" aria-labelledby="heading-1-4"
                                data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et.</p>
                                    <div class="py-4">
                                        <h6 class="">Did you find this article helpful?</h6>
                                        <form class="d-flex justify-content-between">
                                            <div>
                                                <button class="btn btn-xs btn-secondary" type="submit"><i
                                                        class="fas fa-thumbs-up"></i>
                                                </button>
                                                <button class="btn btn-xs btn-secondary" type="submit"><i
                                                        class="fas fa-thumbs-down"></i>
                                                </button>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-xs btn-secondary rounded-pill">Contact
                                                    Support</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 5 -->
                        <div class="card">
                            <div class="card-header d-flex py-4" id="heading-1-5" data-toggle="collapse" role="button"
                                data-target="#collapse-1-5" aria-expanded="false" aria-controls="collapse-1-5">
                                <h6 class="font-weight-400 mb-0">Which license do I need?</h6>
                                <span class="text-muted text-sm ml-auto pr-5 d-none d-md-block">3 months ago</span>
                            </div>
                            <div id="collapse-1-5" class="collapse" aria-labelledby="heading-1-5"
                                data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et.</p>
                                    <div class="py-4">
                                        <h6 class="">Did you find this article helpful?</h6>
                                        <form class="d-flex justify-content-between">
                                            <div>
                                                <button class="btn btn-xs btn-secondary" type="submit"><i
                                                        class="fas fa-thumbs-up"></i>
                                                </button>
                                                <button class="btn btn-xs btn-secondary" type="submit"><i
                                                        class="fas fa-thumbs-down"></i>
                                                </button>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-xs btn-secondary rounded-pill">Contact
                                                    Support</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 6 -->
                        <div class="card">
                            <div class="card-header d-flex py-4" id="heading-1-6" data-toggle="collapse" role="button"
                                data-target="#collapse-1-6" aria-expanded="false" aria-controls="collapse-1-6">
                                <h6 class="font-weight-400 mb-0">Which license do I need?</h6>
                                <span class="text-muted text-sm ml-auto pr-5 d-none d-md-block">3 months ago</span>
                            </div>
                            <div id="collapse-1-6" class="collapse" aria-labelledby="heading-1-6"
                                data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et.</p>
                                    <div class="py-4">
                                        <h6 class="">Did you find this article helpful?</h6>
                                        <form class="d-flex justify-content-between">
                                            <div>
                                                <button class="btn btn-xs btn-secondary" type="submit"><i
                                                        class="fas fa-thumbs-up"></i>
                                                </button>
                                                <button class="btn btn-xs btn-secondary" type="submit"><i
                                                        class="fas fa-thumbs-down"></i>
                                                </button>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-xs btn-secondary rounded-pill">Contact
                                                    Support</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 7 -->
                        <div class="card">
                            <div class="card-header d-flex py-4" id="heading-1-7" data-toggle="collapse" role="button"
                                data-target="#collapse-1-7" aria-expanded="false" aria-controls="collapse-1-7">
                                <h6 class="font-weight-400 mb-0">Which license do I need?</h6>
                                <span class="text-muted text-sm ml-auto pr-5 d-none d-md-block">3 months ago</span>
                            </div>
                            <div id="collapse-1-7" class="collapse" aria-labelledby="heading-1-7"
                                data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et.</p>
                                    <div class="py-4">
                                        <h6 class="">Did you find this article helpful?</h6>
                                        <form class="d-flex justify-content-between">
                                            <div>
                                                <button class="btn btn-xs btn-secondary" type="submit"><i
                                                        class="fas fa-thumbs-up"></i>
                                                </button>
                                                <button class="btn btn-xs btn-secondary" type="submit"><i
                                                        class="fas fa-thumbs-down"></i>
                                                </button>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-xs btn-secondary rounded-pill">Contact
                                                    Support</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 8 -->
                        <div class="card">
                            <div class="card-header d-flex py-4" id="heading-1-8" data-toggle="collapse" role="button"
                                data-target="#collapse-1-8" aria-expanded="false" aria-controls="collapse-1-8">
                                <h6 class="font-weight-400 mb-0">How do I get access to a theme?</h6>
                                <span class="text-muted text-sm ml-auto pr-5 d-none d-md-block">3 months ago</span>
                            </div>
                            <div id="collapse-1-8" class="collapse" aria-labelledby="heading-1-8"
                                data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et.</p>
                                    <div class="py-4">
                                        <h6 class="">Did you find this article helpful?</h6>
                                        <form class="d-flex justify-content-between">
                                            <div>
                                                <button class="btn btn-xs btn-secondary" type="submit"><i
                                                        class="fas fa-thumbs-up"></i>
                                                </button>
                                                <button class="btn btn-xs btn-secondary" type="submit"><i
                                                        class="fas fa-thumbs-down"></i>
                                                </button>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-xs btn-secondary rounded-pill">Contact
                                                    Support</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 9 -->
                        <div class="card">
                            <div class="card-header d-flex py-4" id="heading-1-9" data-toggle="collapse" role="button"
                                data-target="#collapse-1-9" aria-expanded="false" aria-controls="collapse-1-9">
                                <h6 class="font-weight-400 mb-0">How do I attach previous orders?</h6>
                                <span class="text-muted text-sm ml-auto pr-5 d-none d-md-block">3 months ago</span>
                            </div>
                            <div id="collapse-1-9" class="collapse" aria-labelledby="heading-1-9"
                                data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et.</p>
                                    <div class="py-4">
                                        <h6 class="">Did you find this article helpful?</h6>
                                        <form class="d-flex justify-content-between">
                                            <div>
                                                <button class="btn btn-xs btn-secondary" type="submit"><i
                                                        class="fas fa-thumbs-up"></i>
                                                </button>
                                                <button class="btn btn-xs btn-secondary" type="submit"><i
                                                        class="fas fa-thumbs-down"></i>
                                                </button>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-xs btn-secondary rounded-pill">Contact
                                                    Support</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Categories -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card text-center">
                        <div class="px-4 py-5">
                            <img alt="Image placeholder" src="../../assets/img/icons/essential/detailed/Code.svg"
                                class="svg-inject" style="height: 50px;">
                        </div>
                        <div class="px-4 pb-5">
                            <h5>Payments</h5>
                            <p class="px-5 px-lg-4 text-muted mb-4">Awesome collection of pages for any scenario.</p>
                            <span class="badge badge-lg badge-pill badge-secondary">9 articles</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center">
                        <div class="px-4 py-5">
                            <img alt="Image placeholder" src="../../assets/img/icons/essential/detailed/Code.svg"
                                class="svg-inject" style="height: 50px;">
                        </div>
                        <div class="px-4 pb-5">
                            <h5>Purchasing</h5>
                            <p class="px-5 px-lg-4 text-muted mb-4">Awesome collection of pages for any scenario.</p>
                            <span class="badge badge-lg badge-pill badge-secondary">21 articles</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center">
                        <div class="px-4 py-5">
                            <img alt="Image placeholder" src="../../assets/img/icons/essential/detailed/Code.svg"
                                class="svg-inject" style="height: 50px;">
                        </div>
                        <div class="px-4 pb-5">
                            <h5>Support</h5>
                            <p class="px-5 px-lg-4 text-muted mb-4">Awesome collection of pages for any scenario.</p>
                            <span class="badge badge-lg badge-pill badge-secondary">14 articles</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection