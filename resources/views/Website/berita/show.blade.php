@extends('layout.websiteblank')
@section('konten_web')
<section class="tp-blog-area pt-80 pb-60">
    <div class="container container-large">
       <div class="row">
        <div class="d-flex flex-column flex-xl-row">
            <!--begin::Content-->
            <div class="flex-lg-row-fluid me-xl-15">
                <!--begin::Post content-->
                <div class="mb-17">
                    <!--begin::Wrapper-->
                    <div class="mb-8">
                        <!--begin::Info-->
                        <div class="d-flex flex-wrap mb-6">
                            <!--begin::Item-->
                            <div class="me-9 my-1">
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-element-11 text-primary fs-2 me-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <span class="fw-bold text-gray-500">HOME > BERITA</span>
                                <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="me-9 my-1">
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-briefcase text-primary fs-2 me-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <span class="fw-bold text-gray-500">Announcements</span>
                                <!--begin::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="my-1">
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-message-text-2 text-primary fs-2 me-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <span class="fw-bold text-gray-500">24 Comments</span>
                                <!--end::Label-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Title-->
                        <a href="#" style="font-family:lucida-sans font-size:10px " class="text-gray-900 text-hover-primary fs-2 fw-bold">{{ $berita->judul }}
                        <span class="fw-bold text-muted fs-5 ps-1">Diposting {{ $berita->created_at->diffForHumans() }}</span></a>
                        <!--end::Title-->
                        <!--begin::Container-->
                        <div class="overlay mt-8">
                            <!--begin::Image-->
                            {{-- <img src="{{ asset('/storage/beritas/'.$item->gambar) }}" > --}}
                            <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-550px"style="background-image: url('{{ asset("storage/beritas/" . $berita->gambar) }}')"></div>
                            <!--end::Image-->
                            <!--begin::Links-->
                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                <a href="pages/about.html" class="btn btn-primary">About Us</a>
                                <a href="pages/careers/apply.html" class="btn btn-light-primary ms-3">Join Us</a>
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Description-->
                    <div class="fs-5 fw-semibold text-gray-600">
                        <!--begin::Text-->
                        {{ $berita->content }}
                        <p class="mb-8">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words per minute and your writing skills are sharp. From the seed of the idea to finally hitting “Publish,” you might spend several days or maybe even a week “writing” a blog post, but it’s important to spend those vital hours planning your post and even thinking about
                        <a href="pages/blog/post.html" class="link-primary pe-1">Your Post</a>(yes, thinking counts as working if you’re a blogger) before you actually write it.</p>
                        <!--end::Text-->
                        <!--begin::Text-->
                        <p class="mb-8">There’s an old maxim that states,
                        <span class="text-gray-800 pe-1">“No fun for the writer, no fun for the reader.”</span>No matter what industry you’re working in, as a blogger, you should live and die by this statement.</p>
                        <!--end::Text-->
                        <!--begin::Text-->
                        <p class="mb-8">Before you do any of the following steps, be sure to pick a topic that actually interests you. Nothing – and
                        <a href="pages/blog/home.html" class="link-primary pe-1">I mean NOTHING</a>– will kill a blog post more effectively than a lack of enthusiasm from the writer. You can tell when a writer is bored by their subject, and it’s so cringe-worthy it’s a little embarrassing.</p>
                        <!--end::Text-->
                        <!--begin::Text-->
                        <p class="mb-17">I can hear your objections already. “But Dan, I have to blog for a cardboard box manufacturing company.” I feel your pain, I really do. During the course of my career, I’ve written content for dozens of clients in some less-than-thrilling industries (such as financial regulatory compliance and corporate housing), but the hallmark of a professional blogger is the ability to write well about any topic, no matter how dry it may be. Blogging is a lot easier, however, if you can muster at least a little enthusiasm for the topic at hand.</p>
                        <!--end::Text-->
                    </div>
                    <!--end::Description-->
                    <!--begin::Block-->
                    <div class="d-flex align-items-center border-1 border-dashed card-rounded p-5 p-lg-10 mb-14">
                        <!--begin::Section-->
                        <div class="text-center flex-shrink-0 me-7 me-lg-13">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-70px symbol-circle mb-2">
                                <img src="{{ asset('/storage/beritas/'.$berita->gambar) }}" >
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="mb-0">
                                <a href="pages/user-profile/overview.html" class="text-gray-700 fw-bold text-hover-primary">{{ $berita->penulis }}</a>
                                <span class="text-gray-500 fs-7 fw-semibold d-block mt-1">Co-founder</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Text-->
                        <div class="mb-0 fs-6">
                            <div class="text-muted fw-semibold lh-lg mb-2">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words per minute and your writing skills are sharp writing a blog post often takes more than a couple.</div>
                            <a href="pages/user-profile/overview.html" class="fw-semibold link-primary">Author’s Profile</a>
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Block-->
                    <!--begin::Icons-->
                    <div class="d-flex flex-center">
                        <!--begin::Icon-->
                        <a href="#" class="mx-4">
                            <img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px my-2" alt="" />
                        </a>
                        <!--end::Icon-->
                        <!--begin::Icon-->
                        <a href="#" class="mx-4">
                            <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px my-2" alt="" />
                        </a>
                        <!--end::Icon-->
                        <!--begin::Icon-->
                        <a href="#" class="mx-4">
                            <img src="assets/media/svg/brand-logos/github.svg" class="h-20px my-2" alt="" />
                        </a>
                        <!--end::Icon-->
                        <!--begin::Icon-->
                        <a href="#" class="mx-4">
                            <img src="assets/media/svg/brand-logos/behance.svg" class="h-20px my-2" alt="" />
                        </a>
                        <!--end::Icon-->
                        <!--begin::Icon-->
                        <a href="#" class="mx-4">
                            <img src="assets/media/svg/brand-logos/pinterest-p.svg" class="h-20px my-2" alt="" />
                        </a>
                        <!--end::Icon-->
                        <!--begin::Icon-->
                        <a href="#" class="mx-4">
                            <img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px my-2" alt="" />
                        </a>
                        <!--end::Icon-->
                        <!--begin::Icon-->
                        <a href="#" class="mx-4">
                            <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px my-2" alt="" />
                        </a>
                        <!--end::Icon-->
                    </div>
                    <!--end::Icons-->
                </div>
                <!--end::Post content-->
            </div>
            <!--end::Content-->
            <!--begin::Sidebar-->
            <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
                <!--begin::Search blog-->
                <div class="mb-16">
                    <h4 class="text-gray-900 mb-7">Search Blog</h4>
                    <!--begin::Input group-->
                    <div class="position-relative">
                        <i class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 translate-middle ms-6">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <input type="text" class="form-control form-control-solid ps-10" name="search" value="" placeholder="Search" />
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Search blog-->
                <!--begin::Catigories-->
                <div class="mb-16">
                    <h4 class="text-gray-900 mb-7">Categories</h4>
                    <!--begin::Item-->
                    <div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
                        <!--begin::Text-->
                        <a href="#" class="text-muted text-hover-primary pe-2">SaaS Solutions</a>
                        <!--end::Text-->
                        <!--begin::Number-->
                        <div class="m-0">24</div>
                        <!--end::Number-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
                        <!--begin::Text-->
                        <a href="#" class="text-muted text-hover-primary pe-2">Company News</a>
                        <!--end::Text-->
                        <!--begin::Number-->
                        <div class="m-0">152</div>
                        <!--end::Number-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
                        <!--begin::Text-->
                        <a href="#" class="text-muted text-hover-primary pe-2">Events & Activities</a>
                        <!--end::Text-->
                        <!--begin::Number-->
                        <div class="m-0">52</div>
                        <!--end::Number-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
                        <!--begin::Text-->
                        <a href="#" class="text-muted text-hover-primary pe-2">Support Related</a>
                        <!--end::Text-->
                        <!--begin::Number-->
                        <div class="m-0">305</div>
                        <!--end::Number-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
                        <!--begin::Text-->
                        <a href="#" class="text-muted text-hover-primary pe-2">Innovations</a>
                        <!--end::Text-->
                        <!--begin::Number-->
                        <div class="m-0">70</div>
                        <!--end::Number-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack fw-semibold fs-5 text-muted">
                        <!--begin::Text-->
                        <a href="#" class="text-muted text-hover-primary pe-2">Product Updates</a>
                        <!--end::Text-->
                        <!--begin::Number-->
                        <div class="m-0">585</div>
                        <!--end::Number-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Catigories-->
                <!--begin::Recent posts-->
                <div class="m-0">
                    <h4 class="text-gray-900 mb-7">Berita Terbaru</h4>
                    <!--begin::Item-->
                    @foreach ($recentberita as $item)

                    <div class="d-flex flex-stack mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 me-4">

                            <div class="symbol-label" style="background-image: url('{{ asset("storage/beritas/" . $item->gambar) }}')" ></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div class="m-0">
                            <a href="{{ url('berita/('.$item->slug.')') }}" class="text-gray-900 fw-bold text-hover-primary fs-6">{{ $item->judul }}</a>
                            <span class="text-gray-600 fw-semibold d-block pt-1 fs-7">{{ Str::limit($item->content, 60, '...') }}</span>
                        </div>
                        <!--end::Title-->
                    </div>
                    @endforeach
                    <!--end::Item-->
                </div>
                <!--end::Recent posts-->
            </div>
            <!--end::Sidebar-->
        </div>

@endsection
