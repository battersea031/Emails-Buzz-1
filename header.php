<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php bloginfo('name'); ?></title>
   <?php wp_head(); ?>
</head>

<body>
   <header class="sticky-top"
      style="background: linear-gradient(to left, rgb(255, 245, 218), rgb(255, 245, 218)); box-shadow: none;">
      <div class="container">
         <div id="emailsbuzz-logo">
            <a href="index.html">
               <img src="./assets/images/emailsbuzz-logo.svg" alt="">
            </a>
         </div>
         <div class="header-flex">
            <nav>
               <ul>
                  <li class="dropdown">
                     <a href="#" class="link-active">Home</a>
                     <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 448 512">
                        <path
                           d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z">
                        </path>
                     </svg>
                     <ul>
                        <li>
                           <a href="#">Artist</a>
                        </li>
                        <li>
                           <a href="#">Business</a>
                        </li>
                        <li>
                           <a href="#">Budget</a>
                        </li>
                        <li>
                           <a href="#">Guide</a>
                        </li>
                        <li>
                           <a href="#">User Login</a>
                        </li>
                        <li>
                           <a href="#">Contact</a>
                        </li>
                        <li>
                           <a href="#">Budget</a>
                        </li>
                        <li class="dropdown">
                           <a href="#">Instagram</a>
                           <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 448 512">
                              <path
                                 d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z">
                              </path>
                           </svg>
                           <ul>
                              <li>
                                 <a href="#">Instagram</a>
                              </li>
                              <li>
                                 <a href="#">Instagram</a>
                              </li>
                              <li>
                                 <a href="#">Instagram</a>
                              </li>
                              <li>
                                 <a href="#">Instagram</a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a href="index.html">Business</a>
                  </li>
                  <li>
                     <a href="index.html">Budget</a>
                  </li>
                  <li>
                     <a href="index.html">Guide</a>
                  </li>
                  <li class="dropdown">
                     <a href="#">Trends</a>
                     <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 448 512">
                        <path
                           d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z">
                        </path>
                     </svg>
                     <ul>
                        <li>
                           <a href="#">Instagrams</a>
                        </li>
                        <li>
                           <a href="#">Instagram</a>
                        </li>
                        <li>
                           <a href="#">Instagram</a>
                        </li>
                        <li class="dropdown">
                           <a href="#">Instagram </a>
                           <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 448 512">
                              <path
                                 d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z">
                              </path>
                           </svg>
                           <ul>
                              <li>
                                 <a href="#">Instagram</a>
                              </li>
                              <li>
                                 <a href="#">Instagram</a>
                              </li>
                              <li>
                                 <a href="#">Instagram</a>
                              </li>
                              <li>
                                 <a href="#">Instagram</a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a href="#">Resources</a>
                  </li>
                  <div class="cancel-btn" onclick="toggleButtons()">
                     <svg fill="#000" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 384 512">
                        <path
                           d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z">
                        </path>
                     </svg>
                  </div>
               </ul>
            </nav>
            <div class="toggle-slide-btn" onclick="toggleButtons()">
               <svg fill="#000" width="16" height="16" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path
                     d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM64 256c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z">
                  </path>
               </svg>
            </div>
            <div class="search-form">
               <form action="">
                  <input type="search" placeholder="What can we help you find today?" required="">
                  <button type="submit" class="search-btn trip-btn">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M7.333 12.667A5.333 5.333 0 1 0 7.333 2a5.333 5.333 0 0 0 0 10.667ZM14 14l-2.9-2.9"
                           stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     </svg>
                  </button>
               </form>
            </div>
            <div class="mob-search-btn">
               <span class="search-icon-flex">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                     <path d="M7.333 12.667A5.333 5.333 0 1 0 7.333 2a5.333 5.333 0 0 0 0 10.667ZM14 14l-2.9-2.9"
                        stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
               </span>
            </div>
         </div>
      </div>
   </header>