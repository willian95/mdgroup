<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MDGROUP</title>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-

  <link rel="stylesheet" href="{{ url('assets/css/custom.css') }}">
</head>


<body>
  <header id="home">
    <nav class="navbar navbar-expand-lg navbar-fixed-js">
      <div class="main-brand">
        <a class="navbar-brand" href="#">
          <img id="iso" src="{{ url('assets/img/logo.png') }}">
        </a>
        <button class="navbar-toggler  border-0 hamburger hamburger--elastic btn-xs " data-toggle="offcanvas"
            type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
      </div>
      <div class="navbar ml-auto nav-desk">
        <ul class="navbar-nav ">
          <li class="dropdown nav-item">
            <a aria-expanded="false" aria-haspopup="true" class="nav-link" data-toggle="dropdown" href="#"
              role="button">
              PAYER PORTAL
            </a>
          </li>
          <li class="dropdown nav-item">
            <a aria-expanded="false" aria-haspopup="true" class="nav-link" data-toggle="dropdown" href="#"
              role="button">
              TRACK A CASE
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="details.hml">BLOG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link noline" href="tel:568 564 9876">Call now: 568 564 9876</a>
          </li>
          <li>
            <button class="navbar-toggler  border-0 hamburger hamburger--elastic " data-toggle="offcanvas"
            type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
          </li>
        </ul>
      </div>
   
      <div class="navbar-collapse offcanvas-collapse">
        <!-- <ul class="navbar-nav ml-auto">
         <li class="dropdown nav-item">
            <a aria-expanded="false" aria-haspopup="true" class="nav-link" data-toggle="dropdown" href="#"
              role="button">
              PAYER PORTAL
            </a>
          </li>
          <li class="dropdown nav-item">
            <a aria-expanded="false" aria-haspopup="true" class="nav-link" data-toggle="dropdown" href="#"
              role="button">
              TRACK A CASE
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="details.hml">BLOG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link noline" href="tel:568 564 9876">Call now: 568 564 9876</a>
          </li>
        </ul>
        <ul>
        
        
        </ul>-->
        <div class="navbar-nav">
        <div class="row w-100 nav-menu">
          <div class="col-md-6 col-sm-12">
              <li><a href="#mix-of-services">The Perfect Mix of Services</a></li>
        
              <li> <a href="#summary-of-services"> A Brief Summary of Services</a></li>
              <li><a href="#assistance-services"> 365/24/7 Assistance Services</a></li>
              <li><a href="#better-assistance"> Better Medical Assistance</a></li>
              <li><a href="#technical">Technical & Personal Travel Assitance</a></li>
              <li><a href="#extraordinary-assistance">Extraordinary Assistance Services</a></li>
              <li><a href="#telemedicine"> Telemedicine: The Future is Here</a></li>
              <li><a href="#fraud"> Fraud Control and Auditing</a></li>
              <li><a href="#worldwide"> Worldwide Network Access</a></li>
              <li><a href="#management"> Claims Management & Repricing</a></li>
              <li><a href="#funding">Funding Program, Recoveries,Subrogation </a></li>
              <li><a href="#speed">Service at the Speed of Discount</a></li>
              <li><a href="#information">Information Access</a></li>
          </div>
          <div class="col-md-6 col-sm-12">        
              <li><a href="#levels">Service Levels</a></li>
              <li><a href="#cybersecurity">Cybersecurity</a></li>
              <li><a href="#about"> About Mdabroad</a></li>
              <li> <a href="#"> Top Management Bios</a></li>
              <li><a href="#management">Secure Platform for International Claims</a></li>
              <li><a href="#management">Management</a></li>
              <li><a href="#case-status">Case Status, Communications Log and Audit Trail</a></li>
              <li><a href="#legibility">Elegibility: Verification of Benefits, GOPs, Extensions</a></li>
              <li><a href="#like-acetaminofen">Like Acetaminofen for your CEO</a></li>
              <li><a href="#aggregation">Aggregation: the Power of Numbers</a></li>
              <li><a href="#aggregation">While label mobile applications</a></li>
              <li><a href="#unlimited">Unlimited 24/7 support</a></li>

          </div>


        </div>
        </div>
      </div>
    </nav>

    <div class="redes">
      <ul>
        <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i>
          </a></li>
        <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i>
          </a></li>
        <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i>
          </a></li>
      </ul>
    </div>
  </header>
  <div class="wrapper">
    <div class="slider-banner">
      {{--<div><img src="{{ url('assets/img/banner (4).png') }}"></div>
      <div><img src="{{ url('assets/img/banner (3).png') }}"></div>
      <div><img src="{{ url('assets/img/banner (1).png') }}"></div>
      <div><img src="{{ url('assets/img/banner (2).png') }}"></div>--}}
      @foreach(App\Models\Banner::all() as $banner)
      <div><img src="{{ $banner->image }}"></div>
      @endforeach
    </div>
  </div>

  <section>
    <div class="container">
      <div class="main-content">
        <div class="main-content_item"  data-aos="fade-up"
        data-aos-duration="1000">
        <img src="{{ url('assets/img/mini/1Recurso 1.png') }}" alt="">
          <div class="main-content_txt">
            <p>+20 years of</p>
            <span>global operations</span>
          </div>
        </div>
        <div class="main-content_item" data-aos="fade-up"
        data-aos-duration="2000">
        <img src="{{ url('assets/img/mini/1Recurso 2.png') }}" alt="">
          <div class="main-content_txt">
            <p>INTEGRATION</p>
            <span>of our services</span>
          </div>
        </div>
        <div class="main-content_item" data-aos="fade-up"
        data-aos-duration="3000">
        <img src="{{ url('assets/img/mini/1Recurso 3.png') }}" alt="">
          <div class="main-content_txt">
            <p> +1 BILLION</p>
            <span> IN PROCESSED CLAIMS</span>
          </div>
        </div>
        <div class="main-content_item" data-aos="fade-up"
        data-aos-duration="3000">
        <img src="{{ url('assets/img/mini/1Recurso 4.png') }}" alt="">
          <div class="main-content_txt">
            <p> TOP NOTCH</p>
            <span> MANAGEMENT INTEGRATION</span>
          </div>
        </div>
      </div>


    </div>
  </section>

  <section class="main-background" style="background:url('assets/img/background.png')" id="mix-of-services">
    <div class="row">
      <div class="col-md-6" data-aos="fade-up" >
        <p>
          <strong> OVER TWO DECADES</strong> <br>

        </p>
        <p> of finding the perfect
          mix of resources to
          service your claim.</p>
      </div>
      <div class="col-md-6">
        <img data-aos="zoom-in" data-aos-duration="2500" src="{{ url('assets/img/logo3.png') }}" alt="">
      </div>
    </div>
  </section>
  <section class="main-background_blue" id="summary-of-services">
    <div class="container">
      <div class="row " data-aos="fade-up" data-aos-duration="2000">
        <div class="col-md-5"  >
          <p class="txt">BRIEF <br>
            SUMMARY <br>
            OF SERVICES</p>
        </div>
        <div class="col-md-7">
          <div class="slider-banner items_blue">
            <div>
              <p>Provider Networks</p>
              <p>LATAM: Largest Proprietary Network</p>
              <p>USA: Aetna Insurance Network </p>
            </div>
            <div>
              <p>Comprehensive Cost Containment</p>
              <p>Discounted Networks</p>
              <p>Pre-certification / VOBs </p>
              <p>Medical Case Management </p>
              <p>(routine, intermediate, complex)
              </p>
              <p>Payer Discount Optimization Program</p>
              <p>Hotel/Home Visiting Doctors</p>
              <p>Telemedicine</p>
              <p>AssisticaMD®</p>
            </div>
            <div>
              <p> Core Services</p>
              <p>24/7 VIP Medical Assistance Service</p>
              <p>TPA for Claims Management </p>
              <p>Full Policy Support</p>
              <p>GDPR & HIPPA Compliant</p>
              <p>Advanced Information Technologies</p>
              <p>Unique Expertise in LATAM & the </p>
              <p>Caribbean</p>
              <p>While-Label Resources</p>
              <p>Transparent Reporting </p>
              <p>International Legal Support</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <section class="md-abrodad" style="background:url('assets/img/banner.png')" id="md">
    <div class="md-abrodad_item container" data-aos="zoom-in" data-aos-duration="2500">
    <img src="{{ url('assets/img/logored.png') }}" alt="">
      <strong>WE PROMISE TO MAKE
        YOUR LIFE BETTER</strong>
      <p>We protect your brand equity and make your
        clients happy through a singular focus on delivering
        flawless, seamless, and effective service.</p>
    </div>
  </section>
  <section class="mt-5 .mb-5">
    <div class="container">
      <div class="main-content">
        <div class="main-content_item" data-aos="fade-up"
        data-aos-duration="1000">
        <img src="{{ url('assets/img/mini/ddRecurso 8.png') }}" alt="">
          <div class="main-content_txt">
            <p>MEDICAL <br>
              ASSISTANCE</p>
          </div>
        </div>
        <div class="main-content_item" data-aos="fade-up"
        data-aos-duration="2000">
        <img src="{{ url('assets/img/mini/ddsRecurso 8.png') }}" alt="">
          <div class="main-content_txt">
            <p>TRAVEL <br>
              ASSISTANCE</p>
          </div>
        </div>
        <div class="main-content_item" data-aos="fade-up"
        data-aos-duration="3000">
        <img src="{{ url('assets/img/mini/qqRecurso 8.png') }}" alt="">
          <div class="main-content_txt">
            <p> COST <br>
              CONTAINMENT</p>
          </div>
        </div>
        <div class="main-content_item" data-aos="fade-up"
        data-aos-duration="3000">
        <img src="{{ url('assets/img/mini/ssdRecurso 8.png')}}" alt="">
          <div class="main-content_txt">
            <p>QUALITY <br>
              ASSURANCE</p>
          </div>
        </div>
      </div>


    </div>
  </section>

  <section class="main-services" id="assistance-services">
    <div class="main-services_item">
      <div class="titles-service mt-0 " data-aos="fade-right">
        <h2>365/24/7 ASSISTANCE SERVICES</h2>
      </div>
      <div class="main-services_content">
        <div data-aos="fade-right" data-aos-duration="1000"><img src="{{ url('assets/img/service/services (2).png') }}" alt=""></div>
        <div class="ml-4">
          <p> <strong>MDabroad´s</strong> assistance services are multi-faceted,
            many travelers are rarely prepared for illness while
            abroad for work and pleasure. Furthermore, they are
            unable to predict the many challenges they will face
            when navigating through foreign medical systems. <br><br>
            This places travelers in a highly vulnerable position
            with regard to their medical well-being, both in
            minor and complex medical conditions. It is critical
            to manage health conditions appropriately and in a
            timely manner to minimize risk and costs while
            traveling abroad. <br><br>
            The ability to respond to these risks can make all the
            difference between reasonable and customary
            charges and grossly inflated charges. MDabroad
            offers comprehensive assistance Services which
            ensure immediate access to medical guidance and
            care. <br><br>
            <strong> MDabroad´s</strong> can assist travelers all over the
            globe with an exclusive network of the most highly
            credentialed providers, for both outpatient and
            inpatient care. <strong>MDabroad</strong> offers unique packages
            to support the unique needs of travelers in any part
            of the world. Our integrated packages include travel
            assistance Services before, during, and upon return.
            We extend travel preparation Services, so they are
            informed of potential health risks prior to travel.
          </p>
        </div>
      </div>
    </div>
    <div class="main-services_item mt-5" id="better-assistance">
      <div class="titles-service"  data-aos="fade-right">
        <h2 class="ml-5">BETTER MEDICAL ASSISTANCE</h2>
      </div>
      <div class="main-services_content">
        <div class="ml-5">
          <p>
            Coordination of outpatient and/or inpatient care
            for any medical condition: <br><br>
            · Dental Services. <br>
            · House Calls.<br>
            · Medical Evacuations & Repatriations. <br>
            · Telemedicine.<br>
            · Prescribe medication - Discount Program for our clients members.<br>
            Discount Program for our client’s members.<br><br>
            <strong>White-glove approach to additional services:</strong><br><br>
            · Accompanying person in case of prolonged <br>
             <b style="color: transparent;">· </b> hospitalization - Air Travel and/or Lodging <br>
            · Cases arising from the practice of sports <br>
            · Coordination of medical care for pre-existing
            medical conditions <br>
            · Early return<br>
            · Early return for death of 1st Degree relative <br>
            · Escort for the return of minors<br>
            · Medical transfers <br>
            · Physiotherapy<br>
            · Repatriation of mortal remains <br>
            · Repatriations <br>
            · Return of accompanying persons<br>
            · Return to home country due to health reasons
          </p>
        </div>
        <div data-aos="fade-left" data-aos-duration="1000">
        <img src="{{ url('assets/img/service/services (9).png') }}" alt="">
        </div>

      </div>
    </div>
    <div class="main-services_item" id="telemedicine">
      <div class="titles-service "  data-aos="fade-right">
        <h2>TELEMEDICINE: THE FUTURE IS HERE</h2>
      </div>
      <div class="main-services_content">
        <div data-aos="fade-right" data-aos-duration="1000"> <img src="{{ url('assets/img/service/services (8).png') }}" alt=""></div>
        <div class="ml-4">
          <p>
            In simple cases, our Operations Center may offer the
            possibility of coordinating a telemedical consultation,
            and in many cases, it will be the patient who will
            usually ask for that type of service, when the medical
            condition is considered minor. In every case, our
            physicians will speak in the patient’s language:
            English, Spanish and Portuguese. <br><br>
            This service allows us to reduce response times,
            increase direct contact with patients and reduce
            costs for our clients. The most common medical
            conditions include:<br><br>
            • Common cold <br>
            • Allergies <br>
            • Constipation <br>
            • Cough <br>
            • Nausea <br>
            • Diarrhea <br>
            • Ear problems <br>
            • Pink eye <br>
            • Minor respiratory problems <br>
            • Vomiting<br>
          </p>
        </div>
      </div>
    </div>
    <div class="main-services_item mt-5" id="extraordinary-assistance">
      <div class="titles-service "  data-aos="fade-right">
        <h2>EXTRAORDINARY ASSISTANCE SERVICES</h2>
      </div>
      <div class="main-services_content">
        <div class="ml-4">
          <p><strong>Services for Healthcare Insurers and TPAs</strong></p>
          <p> <strong>MDabroad´s</strong> is a leader in the TPA space in the
            Americas. With a local presence in the US for
            nearly two decades, we have earned the trust and
            relationships of the facilities and providers that are
            most commonly chosen by the international patient
            market. <br><br>
            Serving expatriates and travelers globally, we have
            the human resources and technology to connect
            payers, providers and patients, enabling direct
            access to a large network of providers, in addition
            to our white glove service and 24/7 Assistance. <br><br>
            Our assistance service delivers a reliable member
            experience, powered by a rich platform of web and
            mobile based solutions for clients and members.
            md abroad operates a Secure and Compliant
            Platform to transmit patient data and sensitive
            financial information for eligibility, GOPs, extensions,
            medical reports, invoicing claims settlement service. <br><br>
            We deliver transparency and bespoke solutions for
            our clients to mitigate losses, drive patients to the
            most cost-effective networks and minimize utilization
          </p>
        </div>
        <div  data-aos="fade-left" data-aos-duration="1000">
        <img src="{{ url('assets/img/service/services (6).png') }}" alt="">
        </div>

      </div>
    </div>
    <div class="main-services_item" id="technical">
      <div class="titles-service "  data-aos="fade-right">
        <h2>TECHNICAL & PERSONAL TRAVEL ASSISTANCE</h2>
      </div>
      <div class="main-services_content">
        <div data-aos="fade-right" data-aos-duration="1000"><img src="{{ url('assets/img/service/services (5).png') }}" alt=""></div>
        <div class="ml-4">
          <p>
            Tracking of lost luggage and concierge services
            Cash advance <br><br>
            • Tracking of lost luggage and concierge services.<br>
            • Cash advance.<br>
            • Assistance in case of lost and/or stolen travel documentation.<br>
            • Reservation of air tickets and hotels.<br>
            • Transmission of urgent messages to family in case of medical<br>
            <b style="color: transparent;">• </b>or legal emergencies.

          </p>
          <p class="txt-strong"> LEGAL REFERAL</p>

          <p>• Access to legal counsel whenever the traveler is being<br>
            <b style="color: transparent;">• </b>pressed with charges or was involved in an accident.<br>
            • This service also provides advocacy with the traveler’s<br>
            <b style="color: transparent;">• </b>consular authorities locally.</p>
          <p class="txt-strong"> SPECIAL SERVICES</p>
          <p> • Critical care.<br>
              • Management of trauma cases, deploying<br>
              <b style="color: transparent;">• </b>immediate resources, coordination of<br>
              <b style="color: transparent;">• </b>specialists and immediate response teams.</p>
        </div>
      </div>
    </div>
    <div class="main-services_item mt-5">
      <div class="titles-service "  data-aos="fade-right">
        <h2>A FOCUS ON INTELLIGENT COST CONTAINMENT</h2>
      </div>
      <div class="main-services_content">
        <div class="ml-4">
          <p><strong>Cost Management </strong></p>
          <p> • US Claims are placed through direct agreements
            and Aetna Passport Health. <br><br>
            • On critical care cases, we deploy immediate
            resources, coordination of specialists and immediate
            response teams.<br><br>
            • Fraud control and auditing. Using local resources
            worldwide, we pay in local currency through our
            own staff, avoiding manipulation of pharmacy and
            consultation prices.<br><br>
            <strong>Proactive cost containment in US hospitals.</strong><br>
            • We deploy a network of hospitalists who manage
            care within the hospital setting on a proactive basis,
            as opposed to traditional case management and
            audit that happens after the fact.
          </p>
        </div>
        <div  data-aos="fade-left" data-aos-duration="1000">
        <img src="{{ url('assets/img/service/services (3).png') }}" alt="">
        </div>

      </div>
    </div>
    <div class="main-services_item main-services_item-edit" id="fraud">
      <div class="titles-service "  data-aos="fade-right">
        <h2>FRAUD CONTROL</h2>
      </div>
      <div class="main-services_content">
        <div data-aos="fade-right" data-aos-duration="1000">  <img src="{{ url('assets/img/service/services (4).png') }}" alt=""></div>
        <div class="ml-4 center">
          <p class="txt-strong">FORWARD VISION COST CONTAINMENT FRAUD
            CONTROL AND AUDITING
            </p>
          <p>
          Using local resources worldwide, we pay in local currency through our
          own staff, avoiding manipulation of pharmacy and consultation prices.
          </p>


        </div>
      </div>
    </div>
    <div class="main-services_item  main-services_item-edit mt-5" id="worldwide">
      <div class="titles-service "  data-aos="fade-right">
        <h2 class="ml-5">WORLDWIDE NETWORK ACCESS</h2>
      </div>
      <div class="main-services_content">
        <div class="ml-5">
          <p>
            <strong>MDabroad </strong> complements the in-house provider
            network administration areas of insurance companies
            and third-party administrators.
            We have built up solid credit worthiness with an
            extensive network of strong healthcare providers,
            including the most renowned international patient
            hospitals around the world. <br><br>
            Through <strong>MDabroad</strong> , many international insurers
            and TPAs obtain direct access to hospitals who will
            not only invoice them directly (thus making it cashless
            for the insured), but also benefit from discounts and
            other preferred payment considerations that only md
            abroad can provide through its rich information and
            vast financial resources.<br><br>
            <strong>MDabroad</strong> is the most
            reliable and objective healthcare provider network
            for the management and administration of foreign
            patients in many markets in the global arena.
          </p>
        </div>
        <div  data-aos="fade-left" data-aos-duration="1000">
        <img src="{{ url('assets/img/service/services (10).png') }}" alt="">
        </div>

      </div>
    </div>
    <div class="main-services_item" id="management">
      <div class="titles-service "  data-aos="fade-right">
        <h2>CLAIMS MANAGEMENT & REPRICING</h2>
      </div>
      <div class="main-services_content">

        <div data-aos="fade-right" data-aos-duration="1000"> <img src="{{ url('assets/img/service/services (1).png') }}" alt=""></div>
        <div class="ml-4 center">
          <p>
            <strong> MDabroad</strong> offers payers meticulous case
            management for all in-patient cases. We ensure
            reasonable and customary charges, medical
            necessity, along with best practices for each
            in-patient case. Once verified, we conduct
            exhaustive negotiations to obtain the best possible
            discount for our clients through personalized
            negotiation, prompt payment, and other negotiation
            tactics. <br><br>
            Our comprehensive claims process is supported by
            proprietary software platform that tracks the specific
            processes and needs for each Client.<br><br>
            <strong> Other Services for claims management include the
            following:</strong><br><br>
            · Adjudication on our system or our clients’ system<br>
            · Proprietary software platform<br>
            · Outsourcing solutions for TPAs<br>
            · File exchange<br>
            · Medical Audits<br>
            · International arbitration<br>
            · Superior turnaround times
          </p>


        </div>
      </div>
    </div>
    <div class="main-services_item mt-5" id="funding">
      <div class="titles-service "  data-aos="fade-right">
        <h2 class="ml-5">FUNDING PROGRAM , RECOVERIES,
          SUBROGATION</h2>
      </div>
      <div class="main-services_content">
        <div class="ml-5">
          <p>
            <strong>MDabroad</strong> claims Funding (MDCF) is our unique
            funding program which is designed to address
            complicated industry concerns such as risk
            mitigation, cash flow, and managing the nuances of
            conducting business with foreign entities, MDCF is a
            revolutionary payment solution that was developed
            for healthcare insurers and TPAs that provides a
            highly efficient and unique pre-payment settlement
            option. <br> <br>
            MDCF helps payers in the international insurance
            space, deal with their accounts payable in real time,
            maximizing prompt payment discounts while
            enjoying a convenient payback term.
            <strong>MDabroad</strong> offers a complimentary assessment to
            facilitate immediate implementation for this product.
            md abroad is committed to helping providers,
            insurance companies, and insureds to be made
            whole when third parties are culpable for the injuries
            suffered by insureds. <br> <br>
            <strong>Recoveries/Subrogation</strong> <br>
            Our company works closely with numerous leading
            attorneys who focus on subrogation and lien
            enforcement Services where there is third party
            responsibility. Upon request, md abroad can partner
            up injured insureds with attorneys in the jurisdiction
            where the accident occurred to provide counsel if
            the injuries stem from the fault of another. Ultimately,
            md abroad consistently reviews the facts of all
            injuries and accidents with counsel to determine if
            dollars can be recovered for all interested parties.
          </p>
        </div>
        <div  data-aos="fade-left" data-aos-duration="1000">
        <img src="{{ url('assets/img/service/services (11).png') }}" alt="">
        </div>

      </div>
    </div>
    <div class="main-services_item  h90" id="speed">
      <div class="titles-service "  data-aos="fade-right">
        <h2>SERVICE AT THE SPEED OF DISCOUNT</h2>
      </div>
      <div class="main-services_content">
        <div data-aos="fade-right" data-aos-duration="1000"> <img src="{{ url('assets/img/service/services (13).png') }}" alt=""></div>
        <div class="ml-4">
          <p>
            Payers can get substantial discounts when paying
            within 7 to 10 days. But many insurance companies
            can’t pay that fast.
            Trough Revenue Cycle for Payment Management,
            we optimize the discounts for the payer and the
            revenue cycle for providers.
          </p>
          <div class="content-service-btn text-center">
            <span>Want ot know more?</span><br>
            <a class="btn" href="#">Click here</a>
          </div>
        </div>
      </div>
    </div>
    <div class="main-services_item mt-5 h90 " id="information">
      <div class="titles-service "  data-aos="fade-right">
        <h2>ACCESS YOUR INFORMATION ANYTIME, <br>
          ANYWHERE , ANY PLATFORM</h2>
      </div>
      <div class="main-services_content">
        <div class="ml-4">
          <p>
            Our cloud-based proprietary web application is
            available in real time 24/7, 365-days-a-year
            through a secure connection. <br><br>
            Our State-of-the-art web application provides access
            to real-time processing, detailed information related
            to specific claims, processes and status updates.
          </p>
          <div class="text-center  mr-5 pr-5 mt-5">
            <span>Access your Information</span><br>
            <a class="btn" href="#">Click here</a>
          </div>
        </div>
        <div  data-aos="fade-left" data-aos-duration="1000"> <img src="{{ url('assets/img/service/services (12).png') }}" alt=""></div>

      </div>
    </div>
    <div class="main-services_item mt-5" id="satisfaction">
      <div class="titles-service "  data-aos="fade-right">
        <h2>FOCUS ON THE PERSON: CUSTOMER <br>
          SATISFACTION & QUALITY ASSURANCE</h2>
      </div>
      <div class="main-services_content">
        <div data-aos="fade-right" data-aos-duration="1000"> <img src="{{ url('assets/img/service/services (7).png') }}" alt=""></div>
        <div class="ml-4 center">
          <p>
            <strong> Service Delivery Metrics: </strong> <br>
            To ensure that we are continually improving, we
            track and share all metrics related to performance
            and service. During our onboarding and
            implementation process, we agree upon and
            develop specific reporting items, survey wording,
            which we provide to our clients on a monthly basis. <br> <br>
            <strong>Client Satisfaction: </strong> <br>
            Using patient communication tools, we encourage
            feedback from members on their service
            experiences. We can provide customized surveys for
            clients and implement specific campaigns to
            measure different aspects of the services provided. <br> <br>
            <strong>Quality Assurance:</strong> <br>
            In compliance with industry standards, all voice
            communications are recorded and stored on our
            own encrypted servers, all interactions with patients,
            providers and other parties are automatically logged
            on our CRM.
          </p>


        </div>
      </div>
    </div>
  </section>

  <section class="services- mt-5" id="levels">
    <div class="titles-service mt-0">
      <h2>SERVICE LEVELS</h2>
    </div>
    <div class="container services-level" data-aos="zoom-in">
      <div class="level-item">
        <div class="level-item_one">
          <p><strong>95% of incoming calls must be answered within 20 seconds</strong></p>
        </div>
        <div class="level-item_center">
          <p>sla <br> 1 </p>
        </div>
        <div class="level-item_two">
          <p> < 20 seconds </p>
        </div>
      </div>
      <div class="level-item">
        <div class="level-item_one">
          <p><strong>the abandon rate(%) will be measured based on abandoned calls after 20 seconds</strong></p>
        </div>
        <div class="level-item_center">
          <p>sla <br> 2 </p>
        </div>
        <div class="level-item_two">
          <p> < 5%</p>
        </div>
      </div>
      <div class="level-item">
        <div class="level-item_one level-custom_sla3-1">
          <p><strong>100% of the calls must be recorded and made avaible to the client.
           The includes both, calls held with "Insurer" clients and
           those held with Service Providers for the purpose of service 
           coordination</strong></p>
        </div>
        <div class="level-item_center">
          <p>sla <br> 3 </p>
        </div>
        <div class="level-item_two level-custom_sla3">
          <p>100% of the calls must be available ad stored in the times established the local regulations</p>
        </div>
      </div>
      <div class="level-item">
        <div class="level-item_one level-custom_sla4-1">
          <p><strong>Calls will be made available to the "Insurer" for the purpose of quality assurance.
            In the event of a request, the "Insurer" must inform the name name and surname of the insured, their Policy
            number, and date & time of the call based on the information provided by the client.
          </strong></p>
        </div>
        <div class="level-item_center">
          <p>sla <br> 4 </p>
        </div>
        <div class="level-item_two level-custom_sla4">
          <p>100% of calls must be available within 48 hours after being requested by the "Insurer" for quality assurance
            of due to a customer claim. In the case of potential litigation, the calls must be available within 24 hours
          </p>
        </div>
      </div>
      <div class="level-item">
        <div class="level-item_one">
          <p><strong>MDAbroad will respond (through the corresponding method) 
            to reimbursement cases in less than 7 working days</strong></p>
        </div>
        <div class="level-item_center">
          <p>sla <br> 5 </p>
        </div>
        <div class="level-item_two level-custom_sla5">
          <p>
            Response < 7 days of receipt of full documentation
          </p>
        </div>
      </div>
      <div class="level-item">
        <div class="level-item_one">
          <p><strong>MDAbroad will update the policy holder ever 30 days on 
            Bill Claims cases that might exist</strong></p>
        </div>
        <div class="level-item_center">
          <p>sla <br> 6 </p>
        </div>
        <div class="level-item_two">
          <p>100%</p>
        </div>
      </div>
      <div class="level-item">
        <div class="level-item_one level-custom_sla7-1">
          <p><strong>MDAbroad shall notify the "Insurer" of any judicial and/or
            extrajudicial and/or administrative claim filed by a customer in
            relation to the service. Such notifications must be made within a
            maximum of forty-eight (48) business hours from the time that
            MDAbroad becomes aware of the existence of the claim</strong></p>
        </div>
        <div class="level-item_center">
          <p>sla <br> 7 </p>
        </div>
        <div class="level-item_two">
          <p>100%</p>
        </div>
      </div>

    </div>
  </section>

  <section class="md-abrodad main-cyber" style="background:url('assets/img/service/cybersecurity.jpg');background-position: center;" id="cybersecurity">
  <div class="mask-md">
    <div class="md-abrodad_item container" data-aos="zoom-in" data-aos-duration="2500">

        <strong>CYBERSECURITY: </strong>
        <strong>AHEAD OF THE HERE AND NOW
        </strong>
        <p>Personal Health Information Confidentiality
          ALL our personnel complies with the strictest industry requirements,
          namely HIPAA (Health Insurance Portability and Accountability Act) .

          and GDPR (General Data Protection Regulation), regarding the safeguard
          of the patient’s confidential information. We invest significant resources in
          creating, maintaining and updating all our software and process.</p>
      </div>
    </div>
  </section>

  <section class="main-about" id="about">
    <div class="container" data-aos="fade-up" data-aos-duration="2000">
      <h2><strong>ABOUT US</strong></h2>
      <div class="row">
        <div class="col-md-6">
          <p>
            <strong> MDabroad</strong> was founded in 2000 with a specific
            aim: to bridge the gaps between insurers and
            medical providers in the Americas.
          </p>
          <p>
            <strong>MDabroad </strong> offers comprehensive and customized
            services to meet the distinctive requirements of two
            main groups: healthcare insurers, traveler’s
            assistance companies and third-party administrators
            (TPAs) and healthcare providers
          </p>
          <p>With its headquarters in Miami, Florida and a
            highly-trained exclusive service center in Buenos
            Aires, Argentina, we developed a network of
            medical providers while we began providing
            services for world-class insurance and traveler’s
            assistance companies. </p>
          <p>
            Over the years, <strong>MDabroad</strong> has developed a
            role of unquestionable leadership in the healthcare
            industry as the first facilitator for the financial needs
            of international health industry payers and hospitals
            and medical services providers in general.
          </p>
          <p>Since 2000, we have managed over $1 billion
            dollars in the settlement of medical claims between
            insurers and healthcare.</p>
        </div>
        <div class="col-md-6">
          <p>Our formula is simple: We strive to be a reliable
            partner</p>
          <p>
            <strong> MDabroad </strong> sits in the middle of each transaction
            and keeps each party honest. We constantly
            innovate and provide cutting edge technological
            solutions to ease communication barriers, allow for
            transparency and to provide reliable information in
            the quickest manner possible
          </p>

          <p>
            Payers, hospitals, and physicians work mainly with
            local healthcare clients with the same languages,
            cultural norms in familiar regional medical systems.
            But significant differences can arise when dealing
            with foreign hospitals
          </p>

          <p>
            For example, a Latin American hospital may find the
            collections process challenging when an insurance
            company from a completely different region is
            involved. These challenges may hinder a proper
            understanding between each party which resulting
            in delays and different issues when it comes to the
            settlement of any given claim. <strong>MDabroad </strong>
            identified this unique need and meticulously crafted
            an innovative solution that facilitates the most
            effective payment, ensuring both the payers and the
            providers are satisfied.
          </p>

        </div>
      </div>
    </div>

  </section>

  <!---<section class="main-management">
    <div class="titles-service mt-0">
      <h2>TOP MANAGEMENT BIOS</h2>
    </div>

    <p><strong>MDabroad</strong></p>
  </section>-->

  <section class="main-services located mb-5">
    <div class="main-services_item mt-5 main-service_modif">
      <div class="titles-service "  data-aos="fade-right">
        <h2>LOCATED IN SOUTH FLORIDA </h2>
      </div>
      <div class="main-services_content">

        <div class="ml-4 center">
          <p>
            A central hub that allows for reliable domestic and
            cross-border financial transactions, convenient
            jurisdiction for dispute resolution, and convenient access
            to the offices of major insurers.
            <br><br>
            Our presence in Buenos Aires positions us in close
            proximity to the headquarters of many large travel
            insurers and reinsurers in the Latam + Brazil region.
          </p>
          <p>
            Address: XXXXXXXXX <br>
            <a href="tel: 222.3333.5555"> Telephone: 222.3333.5555</a>
            <br>
            <a href="mailto:info@mdabroad.com"> email: info@mdabroad.com</a>
            <br>
            <a href="www.mdabroad.com"> www.mdabroad.com</a>
          </p>


        </div>
        <div data-aos="fade-left" data-aos-duration="1000"> <img src="{{ url('assets/img/other/services (9).png') }}" alt=""></div>
      </div>
    </div>
  </section>

  <section class="md-abrodad advaced" style="background:url('assets/img/other/services (2).png')">
    <div class="md-abrodad_item container" data-aos="fade-up" data-aos-duration="2000">

      <strong>ADVANCED PAYMENT </strong>
      <h2>AND CLAIMS FUNDING</h2>

    </div>
  </section>

  <section class="main-services located mb-5" id="like-acetaminofen">
    <div class="main-services_item mt-5 main-service_modif">
      <div class="titles-service " data-aos="fade-right">
        <h2>LIKE ACETAMINOPHEN FOR YOUR CFO</h2>
      </div>
      <div class="main-services_content">
        <div data-aos="fade-right" data-aos-duration="1000"><img src="{{ url('assets/img/other/services (6).png') }}" alt=""></div>
        <div class="ml-4 center">
          <p>
            <strong> MDabroad </strong> Claims Funding (MDCF) is our unique
            funding program which is designed to address
            complicated industry concerns such as risk
            mitigation, cash flow, and managing the nuances of
            conducting business with foreign entities. <br><br>
            MDCF is a revolutionary payment solution that was
            developed for healthcare insurers and TPAs that
            provides a highly efficient and unique pre-payment
            settlement option.
          </p>


        </div>

      </div>
    </div>
    <div class="main-services_item mt-5  main-service_modif">

      <div class="main-services_content">
        <div class="ml-4 center">
          <div class="titles-service " data-aos="fade-right">
            <h5>WE HAVE ESTABLISHES AN <br>
              INDUSTRY-FIRST INTERNATIONAL <br>
              CLAIMS ADVANCED FUND TO SATISFY <br>
              THE INTEREST OF QUICKLY <br>
              RESOLVING CLAIMS.</h5>
          </div>
          <p>
            Healthcare providers can benefit from our Claims
            Advance Fund that advances payments on claims.
            Healthcare providers enjoy accelerated cash flow,
            reduced accounts receivable, and diminished
            delinquent accounts. <br><br>
            Providers can enjoy a reduction of medical loss and
            expenses associated with claims resolution.
          </p>

        </div>
        <div data-aos="fade-left" data-aos-duration="1000"> <img src="{{ url('assets/img/other/services (5).png') }}" alt=""></div>
      </div>
    </div>
    <div class="main-services_item mt-5  main-service_modif">

      <div class="main-services_content">
        <div data-aos="fade-right" data-aos-duration="1000"> <img src="{{ url('assets/img/other/services (4).png') }}" alt=""></div>
        <div class="ml-4 center">
          <div class="titles-service " data-aos="fade-right">
            <h5>SECURE PLATFORM FOR INTERNATIONAL<br>
                CLAIMS MANAGEMENT</h5>
          </div>
          <p>
            <strong>It's all about process.</strong><br>
            MDAbroad sees the settlement and collection of invoices as the culmination of a well-performed
            process that aims at bridging compliance requirements.<br>
            The following functionality may be achieved through md abroad.<br><br>
            <strong>Universal and Compliant Platform</strong><br>
            Getting it right from the start. Our compliant platform ensures
            that PHI and sensitive financial information is communicated securely and in compliance with
            regulatory standards.
          </p>

        </div>

      </div>
    </div>
    <div class="main-services_item mt-5  main-service_modif" id="legibility">
      <div class="main-services_content">
        <div class="ml-4 center">
          <div class="titles-service " data-aos="fade-right">
            <h5>ELEGIBILITY : VERIFICATION OF BENEFITS, <br>
              GOPS, EXTENSIONS</h5>
          </div>
          <p>
            Providers use our platform to supply payers with specific
            information necessary to issue a payment guarantee
            and communicate relevant policy information. <br><br>
            Our tools allow providers to communicate specific
            information to appropriate ICD and CPT codes
            which allows insurers to more easily identify
            excluded events up front, such as pre-existing
            conditions and certain non-covered medical items,
            such as certain medical devices and hospital
            amenities.
          </p>

        </div>
        <div data-aos="fade-left" data-aos-duration="1000"> <img src="{{ url('assets/img/other/services (3).png') }}" alt=""></div>
      </div>
    </div>
    <div class="main-services_item mt-5  main-service_modif" id="case-status">

      <div class="main-services_content">
        <div data-aos="fade-right" data-aos-duration="1000"> <img src="{{ url('assets/img/other/services (1).png') }}" alt=""></div>
        <div class="ml-4 center">
          <div class="titles-service " data-aos="fade-right" >
            <h5>CASE STATUS, COMMUNICATIONS LOG <br>
              AND AUDIT TRAIL</h5>
          </div>
          <p>
            Our system allows for real-time case status for your
            financial department and patients. <br><br>
            Each contact by email, chat or phone may be
            logged into the system for legal, accounting and
            transparency purposes.
          </p>

        </div>

      </div>
    </div>
    <div class="main-services_item mt-5  main-service_modif" id="aggregation">
      <div class="main-services_content">
        <div class="ml-4 center">
          <div class="titles-service" data-aos="fade-right">
            <h5>AGGREGATION, THE POWER OF NUMBERS</h5>
          </div>
          <p>
            Choosing MDabroad means that you are choosing
            to be a major player in the international healthcare
            market. As are strategic partners with many strong
            international payers, sitting at the center of tens of
            thousands of claims per year, md abroad is armed
            with the unmatched data and resolution channels
            that result in reduced denials and improved
            collections.
          </p>
          <div class="titles-service " data-aos="fade-right">
            <h5>WHITE LABEL MOBILE APPLICATIONS</h5>
          </div>
          <p>Our suite of applications and IT products enables
            hospitals and physicians to provide remote
            consultation, SMS and WhatsApp notifications and
            communication with patients and their families.</p>
        </div>
        <div data-aos="fade-right"  data-aos-duration="1000"> <img src="{{ url('assets/img/other/services (8).png') }}" alt=""></div>
      </div>
    </div>
  </section>

  <section class="md-abrodad bg-section-slider" style="background:url('assets/img/other/bg.png')">
    <div class="md-abrodad_item container" id="unlimited">

      <div class="row">
        <div class="col-md-9">
          <div class="slider-banner items_blue" data-aos="zoom-in" data-aos-duration="2500">
            <div>
              <h2 class="s"><strong>UNLIMITED 24/7 SUPPORT, <br>
                  TRAINING AND SERVICE</strong></h2> <br>
              <p>Our agents are available at all hours to perform any or
                all services involved with your management of
                international patient accounts. </p>
              <a class="btn" href="#">Click here</a>
            </div>
            <div>
              <h2 class="s"><strong>CONTACT OUR TEAM <br>
                  FOR MORE INFORMATION
                  TRAINING AND SERVICE</strong></h2> <br>
              <p>Secure and Compliant Platform to transmit patient data and sensitive
                financial information for eligibility, GOPs, extensions, medical reports,
                and invoicing. </p>
              <a class="btn" href="#">Click here</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="row">
      <div class="col-md-4 footer_item">
       <p> <a href="#mix-of-services">The Perfect Mix of Services</a></p>
       <p> <a href="#summary-of-services"> A Brief Summary of Services</a></p>
      <p>  <a href="#assistance-services"> 365/24/7 Assistance Services</a></p>
        <p><a href="#better-assistance"> Better Medical Assistance</a></p>
       <p> <a href="#technical">Technical & Personal Travel Assitance</a></p>
     <p>   <a href="#extraordinary-assistance">Extraordinary Assistance Services</a></p>
    <p>    <a href="#telemedicine"> Telemedicine: The Future is Here</a></p>
    <p>    <a href="#fraud"> Fraud Control and Auditing</a></p>
       <p> <a href="#worldwide"> Worldwide Network Access</a></p>
     <p>   <a href="#management"> Claims Management & Repricing</a></p>
      </div>
      <div class="col-md-4 footer_item">
        <p><a href="#funding">Funding Program, Recoveries, </a></p>
       <p> <a href="#funding"> Subrogation</a></p>
    <p>    <a href="#speed"> Service at the Speed of Discount</a></p>
  <p>      <a href="#information"> Information Access</a></p>
       <p> <a href="#satisfaction">Satisfaction and Quality Assurance</a></p>
      <p>  <a href="#levels">Service Levels</a></p>
      <p>  <a href="#cybersecurity">Cybersecurity
      </a></p>
    <p>  <a href="#about"> About Mdabroad</a></p>
     <p>   <a href="#"> Top Management Bios</a></p>
      </div>
      <div class="col-md-4 footer_item">
      <p>  <a href="#">Read more </a></p>
      <p>  <a href="#management"> Secure Platform for International Claims</a></p>
        <p><a href="#management"> Management</a></p>
       <p> <a href="#case-status"> Case Status, Communications Log</a></p>
<p>        <a href="#legibility">Elegibility : Verification of Benefits,</a></p>
       <p> <a href="#legibility">GOPs, Extensions</a></p>
 <p>       <a href="#like-acetaminofen">Like Acetaminofen for your CFO
</a></p>
     <p>   <a href="#aggregation"> Aggregation: the Power of Numbers
    </a></p>
     
      </div>
    </div>

    <div class="footer_end mt-5">
      <div class="row">
        <div class="col-md-4">
          <h5><strong>Call now: 568 564 9876</strong></h5>
        </div>
        <div class="col-md-4">
          <p>MDgroup · 2021</p>
        </div>
        <div class="col-md-4">
          
        </div>
      </div>
    
  
     <p></p>
    </div>
  </footer>




  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>
  
  <script src="{{ url('assets/js/custom.js') }}"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>