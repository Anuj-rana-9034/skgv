<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <title>Document</title>
</head>

<body>
  <!-- navbar -->
  <div>
    <nav class="bg-white border-gray-200">
      <div class="flex sm:justify-between sm:items-center mx-auto max-w-screen-xl sm:px-14 p-4">
        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="images/logo2.png" class="h-12 sm:w-16 w-24" alt="" />
        </a>
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
          <h2 class="sm:text-2xl sm:px-52 px-7 text-sm font-bold text-center">
            Shree Krishan Gopal Sarv Karamchari Vitt Sarthi Gaumata Seva
            Charitable Trust
          </h2>
        </div>
        <div>
          <a href="tel:91 9729325440"
            class="relative sm:mt-0 mt-2 inline-flex items-center justify-center sm:h-12 sm:w-20 w-14 h-10 overflow-hidden font-mono font-medium tracking-tighter text-white bg-[#1F2937] bg-green-500 rounded-lg group">
            <span
              class="absolute w-0 h-0 transition-all duration-500 ease-out bg-[#1F2937] rounded-full group-hover:w-56 group-hover:h-56"></span>
            <span
              class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-700"></span>
            <span class="relative sm:text-[14px] text-[12px]">Contact</span>
          </a>
        </div>
      </div>
    </nav>
    <nav class="bg-gray-50 dark:bg-gray-700">
      <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex justify-between sm:px-16">
          <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
            <li>
              <a href="index.php" class="text-gray-900 dark:text-white hover:text-[#22c55e] hover:underline"
                aria-current="page">Home</a>
            </li>
            <li>
              <a href="about.html" class="text-gray-900 dark:text-white hover:text-[#22c55e] hover:underline">About</a>
            </li>
            <li>
              <a href="#membership"
                class="text-gray-900 dark:text-white hover:text-[#22c55e] hover:underline">Membership</a>
            </li>
            <li>
              <a href="#services-card"
                class="text-gray-900 dark:text-white hover:text-[#22c55e] hover:underline">Services</a>
            </li>
          </ul>
          <button class=" " id="open-sidebar">
            <svg class="w-6 text-white h-6" fill="none" stroke="currentColor" viewBox="0 0 448 512"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M0 80C0 53.5 21.5 32 48 32h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80zM64 96v64h64V96H64zM0 336c0-26.5 21.5-48 48-48h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V336zm64 16v64h64V352H64zM304 32h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H304c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48zm80 64H320v64h64V96zM256 304c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s7.2-16 16-16s16 7.2 16 16v96c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s-7.2-16-16-16s-16 7.2-16 16v64c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V304zM368 480a16 16 0 1 1 0-32 16 16 0 1 1 0 32zm64 0a16 16 0 1 1 0-32 16 16 0 1 1 0 32z">
              </path>
            </svg>
          </button>
        </div>
      </div>
    </nav>
  </div>
  <!--  -->
  <div class="bg-gray-100">
    <div class="">
      <!-- Sidebar -->
      <div
        class="relative z-30 h-2 bg-gray-800 text-white w-56 min-h-[300px] overflow-y-auto transition-transform transform -translate-x-full ease-in-out duration-300"
        id="sidebar">
        <!-- Your Sidebar Content -->
        <div class="p-4">
          <h1 class="text-xl mb-7 font-semibold">Donate with Qr Code</h1>
          <div>
            <img src="images/qrcode.jpg" alt="" />
          </div>
        </div>
      </div>

      <!-- Content -->
      <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Navbar -->
        <div class="shadow">
          <div class="container mx-auto">
            <div class="flex justify-between items-center py-4 px-2"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- imageslider -->
    <!-- This is an example component -->
    <div class="">
      <div id="default-carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative h-44 rounded-lg sm:h-[600px] sm:-mt-[350px] -mt-[340px]">
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="images/img1.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
              alt="..." />
          </div>
          <!-- Item 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="images/img2.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
              alt="..." />
          </div>
          <!-- Item 3 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="images/img3.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
              alt="..." />
          </div>
        </div>
        <!-- Slider indicators -->

        <!-- Slider controls -->
        <button type="button"
          class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
          data-carousel-prev>
          <span
            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
              viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span class="hidden">Previous</span>
          </span>
        </button>
        <button type="button"
          class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
          data-carousel-next>
          <span
            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
              viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="hidden">Next</span>
          </span>
        </button>
      </div>

      <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    </div>
  </div>

  <!-- Objectives -->
  <div id="objectives" class="sm:grid sm:mt-0 mt-8 sm:grid-cols-2 bg-[#374151] py-7 sm:px-10">
    <div
      class="group ml-12 mt-10 my-auto border-2 border-black before:hover:scale-95 before:hover:h-72 before:hover:w-80 before:hover:h-44 before:hover:rounded-b-2xl before:transition-all before:duration-500 before:content-[''] before:w-[310px] before:h-24 before:rounded-t-2xl before:bg-[#22C55E] before:absolute before:top-0 w-80 h-72 relative bg-slate-50 flex flex-col items-center justify-center gap-2 text-center rounded-2xl">
      <div
        class="w-28 h-28 mt-8 rounded-full border-4 border-slate-50 z-10 group-hover:scale-150 group-hover:-translate-x-24 group-hover:-translate-y-20 transition-all duration-500">
        <img src="images/img6.jpg" class="rounded-full" alt="" />
      </div>
      <div class="z-10 group-hover:-translate-y-10 transition-all duration-500">
        <span class="text-2xl font-semibold">Chairman</span>
        <p class="text-xl">Sh. Kuldeep Jangra</p>
        <p>General Manager of Haryana Roadways</p>
      </div>
    </div>
    <!--  -->
    <div class="sm:-ml-20 text-justify sm:px-0 px-4">
      <h2 class="sm:text-2xl text-xl font-bold py-3 text-[#22C45E]">
        Objectives/उद्देश्य
      </h2>
      <p class="sm:text-[15px] text-[12px] text-white">
        Shree Krishna Gopal Sarvkaramchari Vitt Sarthi Gaumata Sewa Charitable
        Trust, Panipat (Regd. No. 3572)" stands as a significant endeavor
        dedicated to the service and well-being of Gaumata, the revered cow,
        and other animals in need. This trust has been established through
        collaboration among representatives of different unions and numerous
        employees, united with the purpose of extending support to "Gaushalas"
        and actively working towards the prevention of cruelty against stray
        animals and birds. With its official registration, this organization
        embodies a collective commitment to curbing the suffering of animals
        and birds while upholding the cultural and ethical values associated
        with their welfare. By rallying individuals from diverse sectors of
        society, the trust has embarked on a collaborative journey towards
        fostering a more compassionate humanity and stepping closer to the
        noble goal of creating a world where animals are treated with
        respect and kindness.
      </p>
      <p class="sm:text-[15px] text-[12px] text-white">
        श्री कृष्ण गोपाल सर्वकर्मचारी वित्त सारथी गौमाता सेवा चैरिटेबल ट्रस्ट,
        पानीपत (पंजीकृत संख्या 3572)'' गौमाता, पूज्य गाय और अन्य जरूरतमंद
        जानवरों की सेवा और कल्याण के लिए समर्पित एक महत्वपूर्ण प्रयास है।
        विभिन्न यूनियनों के प्रतिनिधियों और कई कर्मचारियों के बीच सहयोग के
        माध्यम से स्थापित, "गौशालाओं" को समर्थन देने और आवारा जानवरों और
        पक्षियों के खिलाफ क्रूरता की रोकथाम की दिशा में सक्रिय रूप से काम करने
        के उद्देश्य से, यह संगठन अंकुश लगाने के लिए एक सामूहिक प्रतिबद्धता का
        प्रतीक है जानवरों और पक्षियों की पीड़ा और उनके कल्याण से जुड़े
        सांस्कृतिक और नैतिक मूल्यों को कायम रखते हुए, समाज के विभिन्न
        क्षेत्रों के व्यक्तियों को एकजुट करके, ट्रस्ट ने अधिक दयालु मानवता को
        बढ़ावा देने और सृजन के महान लक्ष्य के करीब पहुंचने की दिशा में एक
        सहयोगात्मक यात्रा शुरू की है। एक ऐसी दुनिया जहां जानवरों के साथ सम्मान
        और दयालुता का व्यवहार किया जाता है।
      </p>
    </div>
  </div>
  <!-- services -->
  <div id="services-card" class="bg-gray-100 py-7">
    <div class="py-10">
      <h2 class="text-center text-3xl font-bold text-[#22C55E]">Services</h2>
    </div>
    <div class="sm:flex sm:justify-between sm:px-20">
      <div
        class="w-80 sm:mx-0 mx-auto mb-7 p-4 bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out">
        <img class="w-full h-40 object-cover rounded-t-lg" alt="Card Image" src="images/cow3.png" />
        <div class="p-4">
          <h2 class="text-xl text-[#22C55E] font-semibold">Goshala/गौशाला</h2>
          <p class="text-gray-600">
            We provide security and best catering needs for all the rescue
            cows. We ensure that all our sav cows live a good
            life till their death./हम सभी बचाई गई गायों को सुरक्षा और
            सर्वोत्तम खानपान की आवश्यकताएं प्रदान करते हैं। हम यह सुनिश्चित
            करते हैं कि हमारी सभी गायें अपनी मृत्यु तक अच्छा जीवन जिएं
          </p>
        </div>
      </div>
      <!-- service-card-2 -->
      <div
        class="w-80 sm:mx-0 mx-auto mb-7 p-4 bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out">
        <img class="w-full h-40 object-cover rounded-t-lg" alt="Card Image" src="images/cow2.png" />
        <div class="p-4">
          <h2 class="text-xl text-[#22C55E] font-semibold">
            Medical Care/चिकित्सा देखभाल
          </h2>
          <p class="text-gray-600">
            Treatment, Vaccination and other disease control activities are
            undertaken by Veterinary Hospitals at our center
            with proper care./हमारे केंद्र में पशु चिकित्सालयों द्वारा उपचार,
            टीकाकरण और अन्य रोग नियंत्रण गतिविधियाँ उचित देखभाल के साथ की जाती
            हैं।
          </p>
        </div>
      </div>
      <!-- service-card-3 -->
      <div
        class="w-80 sm:mx-0 mx-auto mb-7 p-4 bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out">
        <img class="w-full h-40 object-cover rounded-t-lg" alt="Card Image" src="images/cow1.png" />
        <div class="p-4">
          <h2 class="text-xl text-[#22C55E] font-semibold">
            Feed & Fodder Development/चारा एवं चारा विकास
          </h2>
          <p class="text-gray-600">
            We supply quality fodder seeds and good nutritious food, also
            medical care and love is given to all our COWS/हम गुणवत्तापूर्ण
            चारा बीज और अच्छा पौष्टिक भोजन प्रदान करते हैं, हमारी सभी गायों को
            चिकित्सा देखभाल और प्यार भी दिया जाता है।
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- form -->
  <div id="membership" class="">
    <!--  -->
    <div>
      <!-- component -->
      <section id="contact" class="relative w-full min-h-screen bg-[#374151] text-[#22C55E]">
        <h1 class="text-4xl p-4 font-bold tracking-wide"></h1>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#22C55E] h-32 w-full">
        </div>

        <!-- wrapper -->
        <div class="relative p-5 lg:px-20 flex flex-col md:flex-row items-center justify-center">
          <!-- Social Media -->
          <div class="w-full md:w-1/2 p-5 md:px-0 mx-5">
            <div class="bg-gray-900 border border-[#22C55E] w-full lg:w-1/2 h-full p-5 pt-8">
              <h3 class="text-2xl font-semibold mb-5">
                Become Member of Skgv Sarthi
              </h3>
              <!-- list -->
              <div class="flex flex-col gap-3">
                Welcome to the SKGV Sarthi family! Fill out the form to become
                a valued member and contribute to our mission.
              </div>
            </div>
          </div>

          <!-- Contact Me -->
          <form action="connect.php" method="POST" class="w-full md:w-1/2 border border-[#22C55E] p-6 bg-gray-900">
            <div>
              <div class="flex flex-col mb-3">
                <label for="name">Name</label>
                <input type="text" id="name"
                  class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-[#22C55E] focus:outline-none focus:bg-gray-800 focus:text-[#22C55E]"
                  autocomplete="off" name="name" require />
              </div>
              <div class="flex flex-col mb-3">
                <label for="email">Email</label>
                <input type="email" id="email"
                  class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-[#22C55E] focus:outline-none focus:bg-gray-800 focus:text-[#22C55E]"
                  autocomplete="off" name="email" require />
                <label for="email">Mobile no.</label>
                <input type="number" id="email"
                  class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-[#22C55E] focus:outline-none focus:bg-gray-800 focus:text-[#22C55E]"
                  autocomplete="off" name="phone" require />
              </div>
              <label for="message">Select Your Member Ship</label>
              <div class=" mb-3">


                <input type="radio"
                  class="px-4  py-3 bg-gray-800 border border-gray-900 focus:border-[#22C55E] focus:outline-none focus:bg-gray-800 focus:text-[#22C55E]"
                  id="" name="membership" require value="primium members">
                <span class="ml-1 text-xl  "> Primium Members</span>

                </input>
                <br>



                <input type="radio"
                  class="px-4 py-3  bg-gray-800 border border-gray-900 focus:border-[#22C55E] focus:outline-none focus:bg-gray-800 focus:text-[#22C55E]"
                  id="" name="membership" require value="regular members"><span class="ml-2  text-xl">Regular
                  Members</span>


                </input>
              </div>
            </div>
            <div class="w-full pt-3">
              <button type="submit"
                class="w-full bg-gray-900 border border-[#22C55E] px-4 py-2 transition duration-50 focus:outline-none font-semibold hover:bg-[#22C55E] hover:text-white text-xl cursor-pointer">
                Send Request
              </button>
            </div>
                
          </form>

        </div>
      </section>
    </div>
  </div>

  <!--  -->

  <div class="bg: [#F3F4F6];">
    <div>
      <h2 class="text-3xl mt-7 text-center font-bold text-[#22C55E]">
        Gallery
      </h2>
    </div>
    <div class="ss-flex">
      <div class="wrapper">
        <i id="left" class="fa-solid fas fa-angle-left"></i>
        <ul class="carousel">
          <li class="card">
            <div class="img">
              <img src="images/cardimg2.png" alt="" draggable="false" />
            </div>
          </li>
          <li class="card">
            <div class="img">
              <img src="images/cardimg1.png" alt="" draggable="false" />
            </div>
          </li>
          <li class="card">
            <div class="img">
              <img src="images/cardimg3.png" alt="" draggable="false" />
            </div>
          </li>
          <li class="card">
            <div class="img">
              <img src="images/cardimg4.png" alt="" draggable="false" />
            </div>
          </li>
          <li class="card">
            <div class="img">
              <img src="images/cardimg5.png" alt="" draggable="false" />
            </div>
          </li>
          <li class="card">
            <div class="img">
              <img src="images/cardimg6.png" alt="" draggable="false" />
            </div>
          </li>
        </ul>
        <i id="right" class="fa-solid fas fa-angle-right"></i>
      </div>
    </div>
  </div>
  <!-- donate-qr code -->
  <section id="donate" class="bg-[#374151] sm:py-20 py-10 sm:px-10 px-4 grid sm:grid-cols-2">
    <div>
      <img class="h-64 sm:mt-16 sm:mx-0 mx-auto sm:ml-10" src="images/qrcode.jpg" alt="" />
    </div>

    <div>
      <h1 class="text-3xl sm:mt-10 sm:text-start text-center py-4 font-bold text-[#22C55E]">
        क्यूआर कोड के साथ दान करें
      </h1>
      <p class="text-xl text-white text-justify">
        गौमाता की सेवा के लिए, दवाइयाँ, पेट भरने के लिए आपका सहयोग जरूरी है।
        कृपया आगे आकर हमें सहयोग दें और इस महत्वपूर्ण कार्य में भागीदार बनें।
        गौमाता, हमारे समाज का महत्वपूर्ण हिस्सा है, जिसके लिए हमें सदैव
        समर्पित रहना चाहिए। आपका सहयोग हमारे उद्देश्यों को पूरा करने में मदद
        करेगा और गौमाता की सेवा में आपका महत्वपूर्ण योगदान होगा। इस नोबल कार्य
        में हम सभी का साथ चाहिए, ताकि हम साथ मिलकर गौमाता के प्रति हमारी
        जिम्मेदारी को निभा सकें। आपके सहयोग का हम बेहद प्रतीक्षा कर रहे हैं।
      </p>
    </div>
  </section>
  <!--form section -->
  <div class="h-full bg-[#F3F4F6] text-black">
    <!-- Container -->
    <div class="mx-auto">
      <div class="flex justify-center px-6 py-12">
        <!-- Row -->
        <div class="w-full xl:w-3/4 lg:w-11/12 flex">
          <!-- Col -->
          <div class="w-full h-auto bg-gray-400 dark:bg-gray-800 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
            style="background-image: url('images/cow15-removebg-preview.png')"></div>
          <!-- Col -->
          <div class="w-full lg:w-7/12 bg-white dark:bg-gray-700 p-5 rounded-lg lg:rounded-l-none">
            <h3 class="py-4 text-2xl text-center text-gray-800 dark:text-white">Contact Us</h3>
            <form class="px-8 pt-6 pb-8 mb-4 bg-white dark:bg-gray-800 rounded" action="gmail.php" method="POST">
              <div class="mb-4 md:flex md:justify-between">
                <div class="mb-4 md:mr-2 md:mb-0">
                  <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="firstName"  name="firstName">
                    First Name
                  </label>
                  <input
                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700  border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    id="firstName" name="firstName" type="text" placeholder="First Name" />
                </div>
                <div class="md:ml-2">
                  <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="lastName"  name="lastName">
                    Last Name

                  </label>
                  <input
                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700  border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    id="lastName" type="text"  name="lastName" placeholder="Last Name" />
                </div>
              </div>
              <div class="mb-4 md:flex md:justify-between">
                <div class="mb-4 md:mr-2 md:mb-0">
                  <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white"  name="phone" >
                    Phone No.
                  </label>
                  <input
                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700  border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    id="Phone" type="text" placeholder="Phone No."  name="phone"/>
                </div>
                <div class="md:ml-2">
                  <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white"  name="gender" >
                    Gender
                  </label>
                  <input
                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    id="lastName" type="text" placeholder="Gender"  name="gender" />
                </div>
              </div>
              <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white"  name="email" >
                  Email
                </label>
                <input
                  class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  id="email" type="email" placeholder="Email"  name="email" />
              </div>
              <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white"  name="address" >
                  Address
                </label>
                <input
                  class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  id="email" type="text" placeholder="Address"  name="address" />
              </div>

              <div class="mb-6 text-center">
                <button
                  class="w-full px-4 py-2 font-bold text-white bg-[#22C55E] rounded-full dark:text-white dark:hover:bg-green-800 focus:outline-none focus:shadow-outline"
                  type="submit  " value="submit">
                  Submit
                </button>
              </div>



            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- map -->
  <section class="bg-[#F3F4F6]">
    <div class="">
      <iframe class="sm:w-full h-80 w-[410px] p-1"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3476.6421724399456!2d76.9903407741287!3d29.380764749712895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ddbb3cc2917f9%3A0x4b806ca8e718d80!2sGURJAR%20DHARAMSHALA(BHAWAN)%20PANIPAT!5e0!3m2!1sen!2sin!4v1718775248725!5m2!1sen!2sin"
        width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>

  <!-- footer -->
  <footer class="bg-[#F3F4F6]">
    <div class="mx-auto max-w-screen-xl space-y-8 px-4 py-16 sm:px-6 lg:space-y-16 lg:px-8">
      <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
        <div>
          <div class="text-teal-600">
            <img src="images/logo2.png" class="h-28 -mt-10" alt="" />
          </div>

          <p class="mt-4 max-w-xs text-gray-500">
            We’re curious, passionate, and committed to helping nonprofits
            learn and grow. Donate now!
          </p>

          <ul class="mt-8 flex gap-6">
            <li>
              <a href="#" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:text-[#22C55E]">
                <span class="sr-only">Facebook</span>

                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>

            <li>
              <a href="#" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:text-[#22C55E]">
                <span class="sr-only">Instagram</span>

                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>

            <li>
              <a href="#" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:text-[#22C55E]">
                <span class="sr-only">Twitter</span>

                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 576 512" aria-hidden="true">
                  <path
                    d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:text-[#22C55E]">
                <span class="sr-only">Twitter</span>

                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 488 512" aria-hidden="true">
                  <path
                    d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
                </svg>
              </a>
            </li>
          </ul>
        </div>

        <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:col-span-2 lg:grid-cols-4">
          <div>
            <p class="font-bold text-gray-900">Office Hours</p>

            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a href="#"
                  class="text-gray-700 text-[15px] hover:text-[#22C55E] font-semibold transition hover:opacity-75">
                  (Monday to Saturday) <br />9:00am to 5:00pm
                </a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition text-[15px] hover:text-[#22C55E] font-semibold">(Sunday
                  off)</a>
              </li>
            </ul>
          </div>

          <div>
            <p class="font-bold text-gray-900">Usefull Links</p>

            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a href="#objectives" class="text-gray-700 transition text-[15px] hover:text-[#22C55E] font-semibold">
                  Objectives
                </a>
              </li>

              <li>
                <a href="#services-card"
                  class="text-gray-700 transition text-[15px] hover:text-[#22C55E] font-semibold">
                  Services
                </a>
              </li>

              <li>
                <a href="#membership" class="text-gray-700 transition text-[15px] hover:text-[#22C55E] font-semibold">
                  Membership
                </a>
              </li>
              <li>
                <a href="#donate" class="text-gray-700 transition text-[15px] hover:text-[#22C55E] font-semibold">
                  Donate
                </a>
              </li>
            </ul>
          </div>

          <div>
            <p class="font-bold text-gray-900">Contact</p>

            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a href="#" class="text-gray-700 transition text-[15px] hover:text-[#22C55E] font-semibold">
                  <i class="fa-solid fa-location-dot"></i> Gurjar Bhavan
                  Sec.24 Near Ujha Road, Panipat
                </a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition text-[15px] hover:text-[#22C55E] font-semibold"><i
                    class="fa-solid fa-envelope"></i>skgvsarthi@gmail.com</a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition text-[15px] hover:text-[#22C55E] font-semibold"><i
                    class="fa-solid fa-phone"></i> +91 9729325440
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <p class="text-xs text-gray-500">
        &copy; 2024. SKGV SARTHI . All rights reserved.
      </p>
    </div>
  </footer>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const carousel = document.querySelector(".carousel");
      const arrowBtns = document.querySelectorAll(".wrapper i");
      const wrapper = document.querySelector(".wrapper");

      const firstCard = carousel.querySelector(".card");
      const firstCardWidth = firstCard.offsetWidth;

      let isDragging = false,
        startX,
        startScrollLeft,
        timeoutId;

      const dragStart = (e) => {
        isDragging = true;
        carousel.classList.add("dragging");
        startX = e.pageX;
        startScrollLeft = carousel.scrollLeft;
      };

      const dragging = (e) => {
        if (!isDragging) return;

        // Calculate the new scroll position
        const newScrollLeft = startScrollLeft - (e.pageX - startX);

        // Check if the new scroll position exceeds
        // the carousel boundaries
        if (
          newScrollLeft <= 0 ||
          newScrollLeft >= carousel.scrollWidth - carousel.offsetWidth
        ) {
          // If so, prevent further dragging
          isDragging = false;
          return;
        }

        // Otherwise, update the scroll position of the carousel
        carousel.scrollLeft = newScrollLeft;
      };

      const dragStop = () => {
        isDragging = false;
        carousel.classList.remove("dragging");
      };

      const autoPlay = () => {
        // Return if window is smaller than 800
        if (window.innerWidth < 800) return;

        // Calculate the total width of all cards
        const totalCardWidth = carousel.scrollWidth;

        // Calculate the maximum scroll position
        const maxScrollLeft = totalCardWidth - carousel.offsetWidth;

        // If the carousel is at the end, stop autoplay
        if (carousel.scrollLeft >= maxScrollLeft) return;

        // Autoplay the carousel after every 2500ms
        timeoutId = setTimeout(
          () => (carousel.scrollLeft += firstCardWidth),
          2500
        );
      };

      carousel.addEventListener("mousedown", dragStart);
      carousel.addEventListener("mousemove", dragging);
      document.addEventListener("mouseup", dragStop);
      wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
      wrapper.addEventListener("mouseleave", autoPlay);

      // Add event listeners for the arrow buttons to
      // scroll the carousel left and right
      arrowBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
          carousel.scrollLeft +=
            btn.id === "left" ? -firstCardWidth : firstCardWidth;
        });
      });
    });
  </script>

  <script>
    const sidebar = document.getElementById("sidebar");
    const openSidebarButton = document.getElementById("open-sidebar");

    openSidebarButton.addEventListener("click", (e) => {
      e.stopPropagation();
      sidebar.classList.toggle("-translate-x-full");
    });

    // Close the sidebar when clicking outside of it
    document.addEventListener("click", (e) => {
      if (
        !sidebar.contains(e.target) &&
        !openSidebarButton.contains(e.target)
      ) {
        sidebar.classList.add("-translate-x-full");
      }
    });
  </script>
</body>

</html>