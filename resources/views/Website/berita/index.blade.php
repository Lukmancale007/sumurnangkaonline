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
                            <a href="#" style="font-family:lucida-sans font-size:10px "
                                class="text-gray-900 text-hover-primary fs-2 fw-bold">{{ $latestNews->judul }}
                                <span class="fw-bold text-muted fs-5 ps-1">Diposting {{
                                    $latestNews->created_at->diffForHumans() }}</span></a>
                            <!--end::Title-->
                            <!--begin::Container-->
                            <div class="overlay mt-8">
                                <!--begin::Image-->
                                {{-- <img src="{{ asset('/storage/beritas/'.$item->gambar) }}"> --}}
                                <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-550px"
                                    style="background-image: url('{{ asset(" storage/beritas/" . $latestNews->gambar)
                                    }}')"></div>
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
                            {{ $latestNews->content }}
                            <p class="mb-8">First, a disclaimer – the entire process of writing a blog post often takes
                                more than a couple of hours, even if you can type eighty words per minute and your
                                writing skills are sharp. From the seed of the idea to finally hitting “Publish,” you
                                might spend several days or maybe even a week “writing” a blog post, but it’s important
                                to spend those vital hours planning your post and even thinking about
                                <a href="pages/blog/post.html" class="link-primary pe-1">Your Post</a>(yes, thinking
                                counts as working if you’re a blogger) before you actually write it.
                            </p>
                            <!--end::Text-->
                            <!--begin::Text-->
                            <p class="mb-8">There’s an old maxim that states,
                                <span class="text-gray-800 pe-1">“No fun for the writer, no fun for the
                                    reader.”</span>No matter what industry you’re working in, as a blogger, you should
                                live and die by this statement.
                            </p>
                            <!--end::Text-->
                            <!--begin::Text-->
                            <p class="mb-8">Before you do any of the following steps, be sure to pick a topic that
                                actually interests you. Nothing – and
                                <a href="pages/blog/home.html" class="link-primary pe-1">I mean NOTHING</a>– will kill a
                                blog post more effectively than a lack of enthusiasm from the writer. You can tell when
                                a writer is bored by their subject, and it’s so cringe-worthy it’s a little
                                embarrassing.
                            </p>
                            <!--end::Text-->
                            <!--begin::Text-->
                            <p class="mb-17">I can hear your objections already. “But Dan, I have to blog for a
                                cardboard box manufacturing company.” I feel your pain, I really do. During the course
                                of my career, I’ve written content for dozens of clients in some less-than-thrilling
                                industries (such as financial regulatory compliance and corporate housing), but the
                                hallmark of a professional blogger is the ability to write well about any topic, no
                                matter how dry it may be. Blogging is a lot easier, however, if you can muster at least
                                a little enthusiasm for the topic at hand.</p>
                            <!--end::Text-->
                        </div>
                        <!--end::Description-->
                        <!--begin::Block-->
                        <div class="d-flex align-items-center border-1 border-dashed card-rounded p-5 p-lg-10 mb-14">
                            <!--begin::Section-->
                            <div class="text-center flex-shrink-0 me-7 me-lg-13">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-70px symbol-circle mb-2">
                                    <img src="{{ asset('/storage/beritas/'.$latestNews->gambar) }}">
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Info-->
                                <div class="mb-0">
                                    <a href="pages/user-profile/overview.html"
                                        class="text-gray-700 fw-bold text-hover-primary">{{ $latestNews->penulis }}</a>
                                    <span class="text-gray-500 fs-7 fw-semibold d-block mt-1">Co-founder</span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Text-->
                            <div class="mb-0 fs-6">
                                <div class="text-muted fw-semibold lh-lg mb-2">First, a disclaimer – the entire process
                                    of writing a blog post often takes more than a couple of hours, even if you can type
                                    eighty words per minute and your writing skills are sharp writing a blog post often
                                    takes more than a couple.</div>
                                <a href="pages/user-profile/overview.html" class="fw-semibold link-primary">Author’s
                                    Profile</a>
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
                                <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px my-2"
                                    alt="" />
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
                            <i
                                class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 translate-middle ms-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" class="form-control form-control-solid ps-10" name="search" value=""
                                placeholder="Search" />
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
                        </h4>
                        <!--begin::Item-->
                        @foreach ($otherNews as $news)

                        <div class="d-flex flex-stack mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px symbol-2by3 me-4">

                                <div class="symbol-label" style="background-image: url('{{ asset(" storage/beritas/" .
                                    $news->gambar) }}')" ></div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="m-0">
                                <a href="{{ url('berita/('.$news->slug.')') }}"
                                    class="text-gray-900 fw-bold text-hover-primary fs-6">{{ $news->judul }}</a>
                                <span class="text-gray-600 fw-semibold d-block pt-1 fs-7">{{ Str::limit($news->content,
                                    60, '...') }}</span>
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


            <div class="col-lg-12">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="tp-blog-title-wrapper">
                            <!--<span class="tp-section-title__pre">-->
                            <!--   Diskominfo<span class="title-pre-color">Bondowoso</span>-->
                            <!--   <svg width="123" height="8" viewBox="0 0 123 8" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                            <!--      <path d="M0.384401 7.82144C0.645399 4.52972 8.83029 8.38041 10.8974 7.67652C12.4321 7.1486 11.6386 7.03474 12.9749 6.19628C14.0816 4.61253 15.7519 3.89829 17.9756 4.06391C18.6125 4.48831 19.2284 4.93342 19.8444 5.38888C21.1076 6.09277 22.1621 6.51717 23.6028 6.13417C24.8973 5.79258 25.5237 4.79885 26.6095 4.18812C30.8481 1.80732 31.3701 2.90456 34.5855 4.58147C36.0993 5.36817 37.634 6.48612 39.461 6.08242C40.1604 5.92715 40.2127 5.67871 40.672 5.54415C42.1023 4.10531 43.9606 3.52564 46.2469 3.80512C47.0612 4.28129 47.8651 4.75745 48.669 5.25431C50.9866 6.22733 54.5049 6.23769 54.6615 3.08053C54.3065 3.22545 53.962 3.37037 53.6175 3.51529C55.622 5.75117 58.6078 6.59998 61.5205 5.5752C64.8091 4.41585 63.8277 3.02877 67.1685 4.35374C68.6614 4.94377 70.2587 5.14045 71.856 4.96447C73.6412 4.7678 75.1028 3.27721 76.6271 3.07018C79.0491 2.73894 81.3354 4.89201 84.2482 4.15707C85.3235 3.88793 86.9417 2.27313 87.7978 2.21102C88.6329 2.14891 89.9484 3.68091 90.8358 4.14672C93.3936 5.51309 96.5882 5.75117 99.3234 4.7471C101.902 3.80512 100.858 3.60845 103.124 4.30199C104.366 4.67464 105.253 5.34747 106.652 5.45099C109.628 5.65801 112.175 4.26058 113.678 1.77626C113.25 1.77626 112.822 1.77626 112.384 1.77626C114.722 5.49239 119.587 6.10312 122.771 3.05983C123.471 2.39734 122.406 1.34151 121.707 2.00399C119.316 4.29164 115.516 3.95004 113.678 1.03097C113.386 0.554807 112.687 0.544455 112.384 1.03097C110.223 4.62288 105.159 4.84026 102.549 1.7038C102.278 1.38291 101.777 1.46572 101.495 1.7038C97.6113 4.99553 91.8171 4.46761 88.6747 0.368483C88.4242 0.0372403 87.85 -0.190489 87.5159 0.223564C84.9685 3.37037 80.7717 3.86723 77.6606 1.10343C77.3787 0.854995 76.9507 0.823941 76.6584 1.10343C73.422 4.26058 68.6823 4.52972 65.1432 1.63134C64.83 1.37256 64.3706 1.38291 64.1409 1.75556C61.9799 5.40958 57.2297 5.74082 54.4631 2.65613C54.0873 2.24207 53.44 2.59402 53.4191 3.09088C53.2103 7.04509 45.6727 1.72451 43.8979 1.92118C40.4841 2.30418 40.2127 5.74082 35.7026 3.82583C33.4894 2.88386 31.8085 0.989563 29.1777 1.39326C26.9226 1.74521 25.9622 3.86723 23.9682 4.63323C20.4603 5.9789 19.2702 2.13856 16.2531 2.33524C11.2941 2.66648 14.1442 7.41774 6.43955 5.75117C4.22629 5.27501 -0.221114 3.93969 0.00856432 7.82144C0.0190042 8.05952 0.363521 8.05952 0.384401 7.82144Z" fill="currentColor"/>-->
                            <!--   </svg>-->
                            <!--</span>-->
                            <h3 class="tp-section-title">Berita <span class="title-color">Pesantren</span>
                                <!--<span class="title-right-shape">-->
                                <!--   <svg width="153" height="5" viewBox="0 0 153 5" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                                <!--      <path d="M0.276872 4.22307C50.8548 2.55338 101.142 2.288 151.684 4.99709C153.451 5.09661 153.427 2.60867 151.684 2.48703C101.469 -0.962917 50.3828 -1.06243 0.276872 3.70336C-0.0862144 3.73653 -0.0983172 4.23412 0.276872 4.22307Z" fill="#05DAC3"/>-->
                                <!--   </svg>-->
                                <!--</span>-->
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tp-blog-text justify-content-start justify-content-lg-end d-flex">
                            <p>Kami juga memuat berita-berita terkini<br> tentang Pesantren dan Negara.</p>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($berita as $item )

            <div class="col-lg-4 col-md-6">
                <div class="tp-blog-wrapper mb-30">
                    <div class="tp-blog-thumb">
                        <a href="{{ asset('berita/('.$news->slug.')') }}"><img
                                src="{{ asset('/storage/beritas/'.$item->gambar) }}"></a>
                        <div class="tp-blog-tag">
                            <p>{{ $item->penulis }}</p>
                        </div>
                    </div>
                    <div class="tp-blog-content">
                        <div class="tp-blog-details ">
                            <div class="tp-blog-date">
                                <span><i class="fa-light fa-calendar-days"></i> {{ $item->tanggal_berita }} </span>
                                <span>-</span>
                                <span><i class="fa-sharp fa-solid fa-comments"></i> Comments (03)</span>
                            </div>
                        </div>
                        <h3 class="tp-blog-title"><a href="{{ asset('berita/('.$news->slug.')') }}">{{ $item->isi }}<br>
                                {{ $item->judul }}</a></h3>
                        <div class="tp-blog-btn d-flex justify-content-between">
                            <div class="read-more p-relative">
                                <a href="{{ asset('berita/('.$news->slug.')') }}">Read MOre <span><svg width="39"
                                            height="8" viewBox="0 0 39 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M38.141 4.13651C38.3362 3.94125 38.3362 3.62466 38.141 3.4294L34.959 0.247422C34.7637 0.05216 34.4471 0.05216 34.2519 0.247422C34.0566 0.442684 34.0566 0.759267 34.2519 0.954529L37.0803 3.78296L34.2519 6.61138C34.0566 6.80665 34.0566 7.12323 34.2519 7.31849C34.4471 7.51375 34.7637 7.51375 34.959 7.31849L38.141 4.13651ZM0.945313 4.28296L37.7874 4.28296L37.7874 3.28296L0.945312 3.28296L0.945313 4.28296Z"
                                                fill="currentColor" />
                                        </svg></span>
                                </a>
                            </div>
                            <div class="fvrt">
                                <span><i class="fa-light fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
