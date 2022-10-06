@extends('layout.app')

@section('title', 'MotoTube Submission')
    

<div class="landing-screen">
    <div class="container">
        <div class="landing-content">
            <h1 class="wow fadeInLeft" data-wow-delay="0.1s">Moto<span>Tube</span> Submission</h1>
            <a href="{{url('send-video')}}" class="page-btn page-btn-primary wow fadeInRight" data-wow-delay="0.1s"><span>Send your video</span></a>
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



<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog modal-xl">
         <div class="modal-content">

             <div class="modal-body">
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 <div class="services_content_body_wpr">
                     <h2>TERMS AND SERVICE</h2>
                     <h5>Terms of service</h5>
                     <p>ViralSnare.com, ViralSnare, LTD (hereafter “ViralSnare”) contracts with copyright holders to
                         give them an avenue to share and license their content with media outlets, TV shows,
                         commercials, lms and other commercial outlets that utilize viral-style video clips for their
                         program- ming needs. ViralSnare brings content holders and the market of purchasers together
                         so that video creators can be compensated for the licensing of their videos, and so industry
                         professionals have a simple process for accessing the videos they need for programming.
                         Subject to our Terms of Service, videos uploaded to ViralSnare are made available for
                         licensing by industry professionals and in return content hold- ers can be compensated for
                         their videos. It is our goal to help owners of videos get compensated and for industry
                         professionals to get the videos they need for their programming in an ecient and aordable
                         manner.</p>
                     <h5>Agreement to Terms of Service</h5>
                     <p>These policies are applicable to the web site located at www.ViralSnare.com, the company
                         ViralSnare, LTD and each of their respective ali- ates, parents, subsidiaries, licensees,
                         and assigns (collectively hereinafter referred to, alternatively, as “ViralSnare,” the
                         “Site,” “we,” “us,” “our” or similar identifying pronouns). Please read these Terms of
                         Service carefully to ensure your legal use of the Site. They contain the legal terms and
                         conditions that govern your use of the services provided to you by the Site and are a
                         binding agreement with you. In using the Site, you arm that you are at least 18 years of
                         age, or an emancipated minor, or possess legal parental or guardian consent, and you are
                         fully able and competent to enter into, abide by and comply with the terms, conditions,
                         obligations, representations, and warranties set forth in these Terms of Service.</p>
                     <h5>Use of the website</h5>
                     <p>The site and any Content available for licensing via the site or from ViralSnare are intended
                         to be accessed and utilized by customers and registered users of ViralSnare. You are
                         specically prohibited from: (i) copying or re-transmitting any portion or the entire
                         Website; (ii) down- loading and/or using any of the Content available from ViralSnare
                         without a valid license agreement with ViralSnare or absent other agree- ments between
                         ViralSnare and Platform service customers; or (iii) manipulating or otherwise displaying the
                         site or any Content available from the site or ViralSnare by using framing or other
                         navigational technology. You are also prohibited from using any data mining, automat- ed,
                         robotic or similar data aggregation or extraction methods or technologies on or in
                         connection with this site. Any unauthorized use of this site, the Platform, or any Content
                         available from this site or ViralSnare may violate applicable copyright and trademark laws,
                         right of privacy or right of publicity, and/or other proprietary rights and applicable
                         federal, state and local laws, rules, orders or regulations, which shall entitle ViralSnare
                         to take action against you, your employer or principal including, without limitation,
                         seeking injunctive relief, as well as damages in the form of actual damages for loss of
                         income, prots derived from the unauthorized use and, where appropriate, attorneys’ fees,
                         other costs of collection, and/or statutory damages.</p>
                     <p>By accessing the site, the Platform, or logging into your account and utilizing the site or
                         Platform, including the viewing, licensing or down- loading of any Content, you agree that
                         you have read and agree to all the Terms and Conditions contained herein and in the Privacy
                         Policy and that you will comply with all applicable laws and regulations, and all privacy
                         and other intellectual property and export laws.</p>
                     <h5>Ownership of site</h5>
                     <p>All sounds, music, video, text, software, user interfaces, visual interfaces, graphics,
                         photographs, artwork, trademarks, logos, computer codes and other audio-visual material
                         (collectively, “Content”) contained on the Site, including but not limited to the design,
                         structure, coor- dination, selection, expression, and arrangement of such Content, is
                         controlled, owned, or licensed by or to ViralSnare, as further set forth in these Terms of
                         Service, and is protected by copyright, trademark and various other intellectual property
                         and unfair competition laws.</p>
                     <p>ViralSnare.com, ViralSnare, LTD its graphics, logos and service names are registered or
                         otherwise protected trademarks or service marks (“Trademarks”). These Trademarks many not be
                         used in connection with any product or service that is not owned or operated by ViralSnare
                         or in any manner that is likely to cause confusion among customers or in any other manner
                         that disparages or misrepresents ViralSnare. All other trademarks, branding and logos not
                         owned by ViralSnare that appear on this Site are the property of their respective owners who
                         may or may not be aliated with, sponsored by or connected to ViralSnare.</p>
                     <p>No part of the Site nor its Content may be used in any way, except as expressly provided in
                         these Terms of Service, without ViralSnare’s express prior written consent, including
                         without limitation the copying, publicly display, reproduction, republishing, posting,
                         uploading, transmitting, or distributing in any method or manner to any other device,
                         computer, web site or other platform or medium. The unautho- rized copying and distribution
                         (including without limitation downloading, uploading, le serving, le “swapping” or other
                         similar activities) of any such Content or materials constitutes copyright infringement
                         under the U.S. Copyright Act and international copyright laws, and ViralSnare and its third
                         party licensors and aliates will enforce such rights to the full extent of the law.</p>
                     <p>ViralSnare reserves the right to do any of the following, at any time, without notice: (1)
                         modify, terminate, or suspend access to the Site, or any portion of the Site, for any
                         reason; (2) modify or change any portion of the Site, and any applicable policies or terms;
                         and (3) interrupt the operation of the Site as necessary to perform routine or non-routine
                         maintenance, error correction, technical updates or other changes.</p>
                     <h5>Duty to Monitor</h5>
                     <p>ViralSnare has no obligation to monitor the use of the Site or to verify, warrant, or vouch
                         for the accuracy and quality of the information that users may acquire. It is apparent that
                         any use of the internet subjects parties to a certain amount of inherent risk. Internet
                         users must exer- cise their own best judgment in relying on information obtained from the
                         Internet, including the Site. ViralSnare bears no responsibility for information or
                         communications downloaded, posted or otherwise added to its Site by third parties without
                         ViralSnare’s express permis- sion, regardless of how inaccurate, unsuitable, oensive, or
                         illegal. Notwithstanding the foregoing, ViralSnare reserves the right to, and may from time
                         to time, monitor any and all information transmitted or received through the Site for
                         operational and other purposes. During monitoring, information may be examined, recorded,
                         copied, and used for authorized purposes in accordance with our Privacy Policy. It is your
                         responsibility to familiarize yourself with our Privacy Policy. Use of the Site constitutes
                         consent to such monitoring and use. We further reserve the right at all times to remove any
                         information or materials, in whole or in part, that in our sole and absolute discretion are
                         objec- tionable or in violation of these Terms of Service and/or our Privacy Policy.</p>
                     <h5>User Conduct</h5>
                     <p>You agree that all Content downloaded, viewed or accessed will be used only for informational
                         and/or evaluation purposes. You agree that you may be charged reasonable fees for
                         downloading Content regardless of whether you actually license the Content. You agree there
                         shall be no commercial exploitation or use, directly or indirectly, or any other
                         unauthorized use of any Content available on this Site without an executed license agreement
                         between you and ViralSnare. In case of circumvention, you agree that a breach of these Terms
                         of Service by you would cause ViralSnare irrevocable injury and damage that cannot be
                         adequately compensated by damages in an action at law. You therefore agree that, without
                         limiting ViralSnare’s rights and remedies at law, including without limitation upon the
                         right to seek damages for any such breach by you, ViralSnare shall further be entitled to
                         injunctive and other equitable relief to prevent and/or cure any breach or threatened breach
                         of this agreement, without proof of actual damages. In addition, you agree to indemnify and
                         hold ViralSnare harmless from and against any and all claims, damages, liabilities, costs
                         and expenses, including reasonable attorney’s fees, arising out of or resulting from your
                         unauthorized use of any Content on the Site.</p>
                     <h5>Limitation of Liability</h5>
                     <p>Your communications with, business dealings with, or participation in promotions of merchants
                         found on or through the Site, including payment and delivery of related goods or services,
                         and any other terms, conditions, warranties, or representations associated with such
                         dealings, are solely between you and such merchant. You understand and agrees that any
                         content downloaded or otherwise obtained through the use of this Site is done at your own
                         risk and that you will be solely responsible for any damage done to your computer system or
                         loss of data that results from the download of such content. We will not be responsible or
                         liable for any loss or damage of any sort incurred as the result of any such dealings,
                         content downloads or as the result of the presence of such merchants on the Site. You assume
                         all risk of errors and/or omissions on the Site and any Third-Party Sites, including the
                         transmission or translation of information. You assume full responsibility for implementing
                         sucient procedures and checks to satisfy your requirements for the accuracy and suitability
                         of the Site and any Third-Party Sites, including the information contained therein, and for
                         maintaining any means that you may require for the recon- struction of lost data or
                         subsequent manipulations or analyses of the information provided hereunder. You acknowledge
                         and agree that your use of the Site and any Third-Party Sites, and any information sent or
                         received in connection therewith, may not be secure and may be intercepted by unauthorized
                         parties. You assume the responsibility for the entire cost of all necessary maintenance or
                         repair of your com- puter system or other property.</p>
                     <p>In no event shall ViralSnare, its parent, aliates or subsidiary companies or their respective
                         directors, ocers, employees, agents, aliates or suppliers be liable for any direct,
                         indirect, punitive, incidental, special, consequential or other damages arising out of or in
                         any way con- nected with the use of the Site or with the delay or inability to use the Site,
                         or for any information, software, products and services adver- tised in or obtained through
                         the Site, our removal or deletion of any materials or records submitted or posted on the
                         Site, or otherwise aris- ing out of the use of the Site, whether based on contract, tort,
                         strict liability or otherwise, even if ViralSnare or any of its subsidiary compa- nies,
                         aliates or suppliers has been advised of the possibility of damages. This waiver applies,
                         without limitation, to any damages or injury arising from any failure of performance, error,
                         omission, interruption, deletion, defect, delay in operation or transmission, computer
                         virus, le corruption, communication-line failure, network or system outage, theft,
                         destruction, unauthorized access to, alteration of, or use of any record. You specically
                         acknowledge and agree that ViralSnare, its parent or subsidiary companies, aliates or
                         suppliers shall not be liable for any defamatory, oensive or illegal conduct of any user of
                         the service. While some states do not allow limitations on how long an implied warranty
                         lasts or the exclusion or limitation of incidental or consequential damages, you are
                         consenting by these Terms of Service to personal jurisdiction in California.</p>
                     <h5>Assignment</h5>
                     <p>These Terms of Service and any rights and licenses granted by you hereunder (including
                         without limitation the Licensed Rights) may not be transferred or assigned by you, but may
                         be assigned by ViralSnare without restriction.</p>
                     <h5>Indemnication</h5>
                     <p>You agree to defend, indemnify and hold harmless the Site, ViralSnare, its parent, aliates or
                         subsidiary companies and their respective directors, ocers, employees and agents from and
                         against any and all claims, actions, suits or proceedings, as well as any and all losses,
                         liabilities, damages, costs and expenses (including reasonable attorneys fees) arising out
                         of or accruing from (i) your access to or use of this Site; (ii) your violation of these
                         Terms of Service (including without limitation the Licensed Rights or any License
                         Agreement); (iii) your viola- tion of any third party right, including without limitation
                         any intellectual property right, property or privacy right; or (iv) any claim that one of
                         your User Submissions caused damage to a third party. You agree that we may at any time and
                         without notice, suspend or terminate your access to this Site if you fail to comply with
                         these Terms of Service or applicable law.</p>
                     <h5>License to Use Site</h5>
                     <p>If you comply with these Terms of Service, ViralSnare grants you a non-exclusive,
                         non-transferable, limited license to enter and use the Site and the services provided
                         herein. This license is for the sole purpose of enabling you to use and enjoy the benets of
                         the services ViralSnare provides, subject to and in accordance with these Terms of Service.
                         You may not copy, modify, distribute, sell or lease any part of our ser- vices or our Site
                         or its software, nor may you reverse engineer or attempt to extract the source code of that
                         software or its other content. ViralSnare reserves the right, to modify, remove, update or
                         add to these Terms of Service at any time without notice. It is your responsibility and
                         obligation to review these Terms of Service periodically for changes. Unless otherwise
                         specied, such changes shall be eective when they are posted, and your continued use of the
                         Site following the posting of changes will mean that you accept and agree to the changes.
                         Your access or use of the Site constitutes your agreement to be bound by these Terms of
                         Service, the ViralSnare licensing terms and the terms and conditions of our Privacy Policy,
                         which are incorporated herein by reference, including any changes that exist when you re-ac-
                         cess this Site (whether or not you have chosen to register as a member of the Site). By
                         using this site, you hereby agree to these terms of ser- vice. If you do not agree with the
                         terms, or the terms of any of our other published policies then do not use this site. Your
                         use will be proof of your agreement to these terms.</p>
                     <h5>Copyright Infringement (Digital Millennium Copyright Act)</h5>
                     <p>ViralSnare does not permit copyright infringement on the Site and will remove any infringing
                         content if we receive notice that such content infringes on another’s intellectual property
                         rights. ViralSnare further reserves the right to terminate accounts or access to the Site in
                         the case of repeat violators. If you are a copyright owner or an agent thereof and believe
                         that any content on the Site infringes upon your copy- rights, you may submit a notication
                         pursuant to the Digital Millennium Copyright Act (“DMCA”) by providing our Copyright Agent
                         with the following information in writing (see 17 U.S.C 512(c)(3) for further detail):</p>
                     <ul>
                         <li>Identication of the copyrighted work claimed to have been infringed, or, if multiple
                             copyrighted works at a single online site are covered by a single notication, a
                             representative list of such works at that site;</li>
                         <li>Identication of the material that is claimed to be infringing or to be the subject of
                             infringing activity and that is to be removed or access to which is to be disabled and
                             information reasonably sucient to permit the service provider to locate the material;
                         </li>
                         <li>The physical or electronic signature of a person authorized to act on behalf of the
                             owner of an exclusive right that is allegedly infringed;* Information reasonably sucient
                             to permit the service provider to contact you, such as an address, telephone number,
                             and, if available, an electronic mail;</li>
                         <li>A statement that you have a good faith belief that use of the material in the manner
                             complained of is not authorized by the copyright owner, its agent, or the law; and</li>
                         <li>A statement that the information in the notication is accurate, and under penalty of
                             perjury, that you are authorized to act on behalf of the owner of an exclusive right
                             that is allegedly infringed.If you fail to comply with all of the requirements set forth
                             herein, your DMCA notice may not be valid. Notice can be submitted to ViralSnare’s
                             designated Copyright Agent at copyright@viralsnare.com. If you believe that your User
                             Submissions which were removed (or to which access was disabled) is/are not infringing,
                             or that you have the authorization from the copyright owner, the copyright owner’s
                             agent, or pursuant to the law, to post and use the material in your User Submissions,
                             you may send a counter-notice containing the following information to the Copyright
                             Agent:</li>
                         <li>Identication of the content that has been removed or to which access has been disabled
                             and the location at which the content appeared before it was removed or disabled;</li>
                         <li>Your physical or electronic signature;</li>
                     </ul>
                     <p>A statement that you have a good faith belief that the content was removed or disabled as a
                         result of mistake or a misidentication of the content; and</p>
                     <ul>
                         <li> Your name, address, telephone number, and e-mail address, a statement that you consent
                             to the personal jurisdiction of the federal court in Los Angeles, California, and a
                             statement that you will accept service of process from the person who provided
                             notication of the alleged infringement. If a counter-notice is received by the Copyright
                             Agent, ViralSnare may send a copy of the counter-notice to the original com- plaining
                             party informing that person that we may replace the removed content or cease disabling
                             it in 10 business days. Unless the copy- right owner les an action seeking a court order
                             against the content provider, member or user, the removed content may be replaced or
                             access to it restored in 10 to 14 business days or more after receipt of the
                             counter-notice, at ViralSnare’s sole discretion.</li>
                     </ul>
                     <h5>Child Protection Notication</h5>
                     <p>This Site contains some content that might be deemed unsuitable to minors. This Site is
                         intended for a mature audience and parents who nd any material on this site unsuitable for
                         their children are encouraged to utilize parental control services. Parental control
                         protections (such as computer hardware, software, or ltering services) are commercially
                         available that may assist you in limiting access to material that is harmful to minors.</p>
                     <h5>Disclaimer of Warranties</h5>
                     <p>ViralSnare is not responsible for, and expressly disclaims all liability for, damages of any
                         kind arising out of use, reference to, or reliance on any information contained within the
                         site. While the information contained within the site is periodically updated, no guarantee
                         is given that the information provided in this Web site is correct, complete, and
                         up-to-date. Although this site may include links providing direct access to other Internet
                         resources, including Websites, ViralSnare is not responsible for the accuracy or content of
                         information contained in these sites. Links from ViralSnare to third-party sites do not
                         constitute an endorsement by ViralSnare of the parties or their products and ser- vices. The
                         appearance on the Web site of advertisements and product or service information does not
                         constitute an endorsement by Viral- Snare, and ViralSnare has not investigated the claims
                         made by any advertiser. Product information is based solely on material received from
                         suppliers.</p>
                     <h5>Violation of Terms of Service</h5>
                     <p>You may use our Site only as permitted by the terms herein stated. As further set forth in
                         our Privacy Policy, you agree and acknowledge that ViralSnare may preserve any communication
                         and information made or disclosed by you through the Site, and ViralSnare reserves the right
                         to disclose any such communication or information that ViralSnare deems necessary (i) to
                         comply with any applicable law, regulation, legal process or governmental authority; (ii) to
                         respond to claims that any such data violates the rights of others; (iii) to enforce these
                         Terms of Service; or (iv) to protect the rights, property or personal safety of ViralSnare,
                         its aliates, parent, subsidiaries, suppliers and their respec- tive directors, ocers,
                         employees and agents and/or users of or visitors to the Site, and the public.</p>
                     <p>You also agree that ViralSnare may, in its sole discretion and without prior notice, suspend
                         or terminate your access to the Site and/or block your future access to the Site if we
                         determine that you have violated these Terms of Service or other agreements or guidelines
                         which may be associated with your use of the Site. You also agree that any violation by you
                         of these Terms of Service will constitute an unlawful and unfair business practice and will
                         cause irreparable harm to ViralSnare for which monetary damages would be inadequate, and you
                         consent to ViralSnare obtaining any injunctive or equitable relief that ViralSnare or its
                         counsel deems necessary in such circumstances. These reme- dies are in addition to any other
                         remedies ViralSnare may have at law or in equity.</p>
                     <p>If ViralSnare does take any legal action against you as a result of your violation of these
                         Terms of Service, ViralSnare will be entitled to recov- er from you, and you agree to pay,
                         all attorneys’ fees and costs of such action, in addition to any other relief granted. You
                         agree that Viral- Snare will not be liable to you or to any third party for termination of
                         your access to the Site as a result of any violation of these Terms of Service or as a
                         result of technical problems or modications to the Site or as otherwise required by law.</p>
                 </div>
             </div>
         </div>
     </div>
 </div>