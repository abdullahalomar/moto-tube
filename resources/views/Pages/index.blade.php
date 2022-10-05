@extends('layout.app')

@section('title', 'MotoTube Submission')
    

<div class="landing-screen">
    <div class="container">
        <div class="landing-content">
            <h1 class="wow fadeInLeft" data-wow-delay="0.1s">Moto<span>Tube</span> Submission</h1>
            <a href="send-video.html" class="page-btn page-btn-primary wow fadeInRight" data-wow-delay="0.1s"><span>Send your video</span></a>
            <ul class="social-share wow fadeInUp" data-wow-delay="0.1s">
                <li>
                    <a href="#" target="_blank">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.465 0.066C7.638 0.012 8.012 0 11 0C13.988 0 14.362 0.013 15.534 0.066C16.706 0.119 17.506 0.306 18.206 0.577C18.939 0.854 19.604 1.287 20.154 1.847C20.714 2.396 21.146 3.06 21.422 3.794C21.694 4.494 21.88 5.294 21.934 6.464C21.988 7.639 22 8.013 22 11C22 13.988 21.987 14.362 21.934 15.535C21.881 16.705 21.694 17.505 21.422 18.205C21.146 18.9391 20.7133 19.6042 20.154 20.154C19.604 20.714 18.939 21.146 18.206 21.422C17.506 21.694 16.706 21.88 15.536 21.934C14.362 21.988 13.988 22 11 22C8.012 22 7.638 21.987 6.465 21.934C5.295 21.881 4.495 21.694 3.795 21.422C3.06092 21.146 2.39582 20.7133 1.846 20.154C1.28638 19.6047 0.853315 18.9399 0.577 18.206C0.306 17.506 0.12 16.706 0.066 15.536C0.012 14.361 0 13.987 0 11C0 8.012 0.013 7.638 0.066 6.466C0.119 5.294 0.306 4.494 0.577 3.794C0.853723 3.06008 1.28712 2.39531 1.847 1.846C2.39604 1.2865 3.06047 0.853443 3.794 0.577C4.494 0.306 5.294 0.12 6.464 0.066H6.465ZM15.445 2.046C14.285 1.993 13.937 1.982 11 1.982C8.063 1.982 7.715 1.993 6.555 2.046C5.482 2.095 4.9 2.274 4.512 2.425C3.999 2.625 3.632 2.862 3.247 3.247C2.88205 3.60205 2.60118 4.03428 2.425 4.512C2.274 4.9 2.095 5.482 2.046 6.555C1.993 7.715 1.982 8.063 1.982 11C1.982 13.937 1.993 14.285 2.046 15.445C2.095 16.518 2.274 17.1 2.425 17.488C2.601 17.965 2.882 18.398 3.247 18.753C3.602 19.118 4.035 19.399 4.512 19.575C4.9 19.726 5.482 19.905 6.555 19.954C7.715 20.007 8.062 20.018 11 20.018C13.938 20.018 14.285 20.007 15.445 19.954C16.518 19.905 17.1 19.726 17.488 19.575C18.001 19.375 18.368 19.138 18.753 18.753C19.118 18.398 19.399 17.965 19.575 17.488C19.726 17.1 19.905 16.518 19.954 15.445C20.007 14.285 20.018 13.937 20.018 11C20.018 8.063 20.007 7.715 19.954 6.555C19.905 5.482 19.726 4.9 19.575 4.512C19.375 3.999 19.138 3.632 18.753 3.247C18.3979 2.88207 17.9657 2.60121 17.488 2.425C17.1 2.274 16.518 2.095 15.445 2.046V2.046ZM9.595 14.391C10.3797 14.7176 11.2534 14.7617 12.0669 14.5157C12.8805 14.2697 13.5834 13.7489 14.0556 13.0422C14.5278 12.3356 14.7401 11.4869 14.656 10.6411C14.572 9.79534 14.197 9.00497 13.595 8.405C13.2112 8.02148 12.7472 7.72781 12.2363 7.54515C11.7255 7.36248 11.1804 7.29536 10.6405 7.34862C10.1006 7.40187 9.57915 7.57418 9.1138 7.85313C8.64846 8.13208 8.25074 8.51074 7.9493 8.96185C7.64786 9.41296 7.45019 9.92529 7.37052 10.462C7.29084 10.9986 7.33115 11.5463 7.48854 12.0655C7.64593 12.5847 7.91648 13.0626 8.28072 13.4647C8.64496 13.8668 9.09382 14.1832 9.595 14.391ZM7.002 7.002C7.52702 6.47698 8.15032 6.0605 8.8363 5.77636C9.52228 5.49222 10.2575 5.34597 11 5.34597C11.7425 5.34597 12.4777 5.49222 13.1637 5.77636C13.8497 6.0605 14.473 6.47698 14.998 7.002C15.523 7.52702 15.9395 8.15032 16.2236 8.8363C16.5078 9.52228 16.654 10.2575 16.654 11C16.654 11.7425 16.5078 12.4777 16.2236 13.1637C15.9395 13.8497 15.523 14.473 14.998 14.998C13.9377 16.0583 12.4995 16.654 11 16.654C9.50046 16.654 8.06234 16.0583 7.002 14.998C5.94166 13.9377 5.34597 12.4995 5.34597 11C5.34597 9.50046 5.94166 8.06234 7.002 7.002V7.002ZM17.908 6.188C18.0381 6.06527 18.1423 5.91768 18.2143 5.75397C18.2863 5.59027 18.3248 5.41377 18.3274 5.23493C18.33 5.05609 18.2967 4.87855 18.2295 4.71281C18.1622 4.54707 18.0624 4.39651 17.936 4.27004C17.8095 4.14357 17.6589 4.04376 17.4932 3.97652C17.3275 3.90928 17.1499 3.87598 16.9711 3.87858C16.7922 3.88119 16.6157 3.91965 16.452 3.9917C16.2883 4.06374 16.1407 4.1679 16.018 4.298C15.7793 4.55103 15.6486 4.88712 15.6537 5.23493C15.6588 5.58274 15.7992 5.91488 16.0452 6.16084C16.2911 6.40681 16.6233 6.54723 16.9711 6.5523C17.3189 6.55737 17.655 6.42669 17.908 6.188V6.188Z" fill="white"/>
                        </svg>                                
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <svg width="11" height="19" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 1.50005C11 1.36745 10.9473 1.24027 10.8536 1.1465C10.7598 1.05273 10.6326 1.00005 10.5 1.00005H8C6.74112 0.937344 5.5086 1.37544 4.57172 2.21863C3.63485 3.06182 3.06978 4.24155 3 5.50005V8.20005H0.5C0.367392 8.20005 0.240215 8.25273 0.146447 8.3465C0.0526785 8.44027 0 8.56744 0 8.70005V11.3001C0 11.4327 0.0526785 11.5598 0.146447 11.6536C0.240215 11.7474 0.367392 11.8001 0.5 11.8001H3V18.5001C3 18.6327 3.05268 18.7598 3.14645 18.8536C3.24021 18.9474 3.36739 19.0001 3.5 19.0001H6.5C6.63261 19.0001 6.75979 18.9474 6.85355 18.8536C6.94732 18.7598 7 18.6327 7 18.5001V11.8001H9.62C9.73119 11.8017 9.83974 11.7661 9.92848 11.6991C10.0172 11.6321 10.0811 11.5374 10.11 11.4301L10.83 8.83005C10.8499 8.75618 10.8526 8.67872 10.8378 8.60364C10.8231 8.52857 10.7913 8.45788 10.7449 8.39702C10.6985 8.33617 10.6388 8.28676 10.5704 8.25261C10.5019 8.21846 10.4265 8.20048 10.35 8.20005H7V5.50005C7.02487 5.25253 7.14111 5.02317 7.32602 4.85675C7.51093 4.69033 7.75123 4.59881 8 4.60005H10.5C10.6326 4.60005 10.7598 4.54737 10.8536 4.45361C10.9473 4.35984 11 4.23266 11 4.10005V1.50005Z" fill="white"/>
                        </svg>                                
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.6 10.2299L12.05 12.8299V7.62988L16.6 10.2299Z" fill="white" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M1 11.1491V9.3096C1 5.5461 1 3.6637 2.1765 2.4534C3.3543 1.2418 5.2081 1.1898 8.9144 1.0845C10.6694 1.0351 12.4634 1 14 1C15.5353 1 17.3293 1.0351 19.0856 1.0845C22.7919 1.1898 24.6457 1.2418 25.8222 2.4534C27 3.6637 27 5.5474 27 9.3096V11.1491C27 14.9139 27 16.795 25.8235 18.0066C24.6457 19.2169 22.7932 19.2702 19.0856 19.3742C17.3306 19.4249 15.5366 19.46 14 19.46C12.3045 19.4549 10.6091 19.4263 8.9144 19.3742C5.2081 19.2702 3.3543 19.2182 2.1765 18.0066C1 16.795 1 14.9126 1 11.1504V11.1491Z" stroke="white" stroke-width="2"/>
                        </svg>                                
                    </a>
                </li>
            </ul>
            <ul class="legal-lists wow fadeInUp" data-wow-delay="0.1s">
                <li><a href="Javascript:void(0);" data-bs-toggle="modal" data-bs-target="#staticSubmission" class="legal_btn">Terms of Submission</a></li>
                <li><a href="Javascript:void(0);" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="legal_btn">Terms of Service</a></li>
            </ul>
        </div>
    </div>
    <div class="landing-right-graphics wow fadeInRight" data-wow-delay="0.6s">
        <svg width="334" height="1080" viewBox="0 0 334 1080" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="702" cy="582" r="702" fill="#C20000"/>
            <circle cx="694" cy="583" r="645" fill="#C20000" stroke="white" stroke-width="12"/>
            <circle cx="891" cy="554" r="702" fill="#AC0000"/>
        </svg>
        <svg width="96" height="1080" viewBox="0 0 96 1080" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="702" cy="613" r="702" fill="#C20000"/>
            <circle cx="684" cy="614" r="645" fill="#C20000" stroke="white" stroke-width="12"/>
            <circle cx="781" cy="585" r="702" fill="#AC0000"/>
        </svg>                
        <div class="landing-right-logo wow fadeInRight" data-wow-delay="0.8s">
            <img src="{{asset('assets/images/landing-right-logo.png')}}" alt="">
        </div>
    </div>
    <div class="landing-left-graphics wow fadeInLeft" data-wow-delay="0.4s">
        <img src="{{asset('assets/images/left-graphics.png')}}" alt="">
    </div>
</div>