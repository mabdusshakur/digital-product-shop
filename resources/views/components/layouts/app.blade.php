<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('resources/user/assets/images/homepage-one/icon.png') }}">
    <title>Shopus: Your One-Stop Destination for Fashion and Style</title>


    <!--------------- swiper-css ---------------->
    <link rel="stylesheet" href="{{ asset('resources/user/css/swiper10-bundle.min.css') }}">

    <!--------------- bootstrap-css ---------------->
    <link rel="stylesheet" href="{{ asset('resources/user/css/bootstrap-5.3.2.min.css') }}">

    <!---------------------- Range Slider ------------------->
    <link rel="stylesheet" href="{{ asset('resources/user/css/nouislider.min.css') }}">

    <!---------------------- Scroll ------------------->
    <link rel="stylesheet" href="{{ asset('resources/user/css/aos-3.0.0.css') }}">

    <!--------------- additional-css ---------------->
    <link rel="stylesheet" href="{{ asset('resources/user/css/style.css') }}">
    @livewireStyles
</head>

<body>


    <!--------------- header-section --------------->
    <header id="header" class="header">
        <div class="header-top-section">
            <div class="container">
                <div class="header-top">
                    <div class="header-profile">
                        <a href="user-profile.html"><span>Account</span></a>
                        <a href="order.html"><span>Track Order</span></a>
                        <a href="faq.html"><span>Support</span></a>
                    </div>
                    <div class="header-contact d-none d-lg-block">
                        <a href="#">
                            <span>Need help? Call us:</span>
                            <span class="contact-number">+ 00645 4568</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-center-section d-none d-lg-block">
            <div class="container">
                <div class="header-center">
                    <div class="logo">
                        <a href="index.html">
                            <!-- <img src="./assets/images/logos/logo.webp" alt="logo"> -->
                            Logo
                        </a>
                    </div>
                    <div class="header-cart-items">
                        <div class="header-search">
                            <button class="header-search-btn" onclick="modalAction('.search')">
                                <span>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.9708 16.4151C12.5227 17.4021 10.9758 17.9723 9.27353 18.0062C5.58462 18.0802 2.75802 16.483 1.05056 13.1945C-1.76315 7.77253 1.33485 1.37571 7.25086 0.167548C12.2281 -0.848249 17.2053 2.87895 17.7198 7.98579C17.9182 9.95558 17.5566 11.7939 16.5852 13.5061C16.4512 13.742 16.483 13.8725 16.6651 14.0553C18.2412 15.6386 19.8112 17.2272 21.3735 18.8244C22.1826 19.6513 22.2058 20.7559 21.456 21.4932C20.7697 22.1678 19.7047 22.1747 18.9764 21.4793C18.3623 20.8917 17.7774 20.2737 17.1796 19.6688C16.118 18.5929 15.0564 17.5153 13.9708 16.4151ZM2.89545 9.0364C2.91692 12.4172 5.59664 15.1164 8.91967 15.1042C12.2384 15.092 14.9138 12.3493 14.8889 8.98505C14.864 5.63213 12.1826 2.92508 8.89047 2.92857C5.58204 2.93118 2.87397 5.68958 2.89545 9.0364Z"
                                            fill="black" />
                                    </svg>
                                </span>
                            </button>
                            <div class="modal-wrapper search">
                                <div onclick="modalAction('.search')" class="anywhere-away"></div>

                                <!-- change this -->
                                <div class="modal-main">
                                    <div class="wrapper-close-btn" onclick="modalAction('.search')">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="red" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="wrapper-main">
                                        <div class="search-section">
                                            <input type="text" placeholder="Search Products.........">
                                            <div class="divider"></div>
                                            <button type="button">All Categories</button>
                                            <a href="#" class="shop-btn">Search</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- change this -->

                            </div>
                        </div>
                        <div class="header-favourite">
                            <a href="wishlist.html" class="cart-item">
                                <span>
                                    <svg width="35" height="27" viewBox="0 0 35 27" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.4047 8.54989C11.6187 8.30247 11.8069 8.07783 12.0027 7.86001C15.0697 4.45162 20.3879 5.51717 22.1581 9.60443C23.4189 12.5161 22.8485 15.213 20.9965 17.6962C19.6524 19.498 17.95 20.9437 16.2722 22.4108C15.0307 23.4964 13.774 24.5642 12.5246 25.6408C11.6986 26.3523 11.1108 26.3607 10.2924 25.6397C8.05177 23.6657 5.79225 21.7125 3.59029 19.6964C2.35865 18.5686 1.33266 17.2553 0.638823 15.7086C-0.626904 12.8872 0.0324709 9.41204 2.22306 7.41034C4.84011 5.01855 8.81757 5.36918 11.1059 8.19281C11.1968 8.30475 11.2907 8.41404 11.4047 8.54989Z"
                                            fill="#6E6D79" />
                                        <path
                                            d="M26.846 13.1392C26.1632 13.1392 25.5534 13.0215 25.0164 12.7862C24.4828 12.5509 24.0602 12.2244 23.7487 11.8068C23.4404 11.3859 23.2747 10.8987 23.2515 10.3452H24.8126C24.8325 10.6468 24.9336 10.9086 25.1159 11.1307C25.3015 11.3494 25.5434 11.5185 25.8417 11.6378C26.14 11.7571 26.4715 11.8168 26.836 11.8168C27.2371 11.8168 27.5917 11.7472 27.9 11.608C28.2115 11.4687 28.4551 11.2749 28.6308 11.0263C28.8065 10.7744 28.8943 10.4844 28.8943 10.1562C28.8943 9.81487 28.8065 9.51491 28.6308 9.25639C28.4584 8.99455 28.2049 8.78906 27.8701 8.63991C27.5387 8.49077 27.1377 8.41619 26.667 8.41619H25.8069V7.16335H26.667C27.0448 7.16335 27.3763 7.09541 27.6613 6.95952C27.9497 6.82363 28.1751 6.63471 28.3375 6.39276C28.4999 6.14749 28.5811 5.8608 28.5811 5.53267C28.5811 5.2178 28.5098 4.94437 28.3673 4.71236C28.2281 4.47704 28.0292 4.29309 27.7707 4.16051C27.5155 4.02794 27.2139 3.96165 26.8659 3.96165C26.5344 3.96165 26.2245 4.02296 25.9362 4.1456C25.6511 4.26491 25.4191 4.43726 25.2402 4.66264C25.0612 4.88471 24.9651 5.15151 24.9518 5.46307H23.4653C23.4819 4.91288 23.6443 4.42898 23.9525 4.01136C24.2641 3.59375 24.6751 3.26728 25.1855 3.03196C25.6959 2.79664 26.2627 2.67898 26.8858 2.67898C27.5387 2.67898 28.1021 2.80658 28.5761 3.06179C29.0534 3.31368 29.4213 3.65009 29.6798 4.07102C29.9416 4.49195 30.0709 4.95265 30.0676 5.45312C30.0709 6.0232 29.9118 6.5071 29.5903 6.90483C29.2721 7.30256 28.8479 7.56937 28.3176 7.70526V7.7848C28.9937 7.88755 29.5174 8.15601 29.8886 8.5902C30.2631 9.02438 30.4487 9.56297 30.4454 10.206C30.4487 10.7661 30.293 11.2682 29.9781 11.7124C29.6665 12.1565 29.2406 12.5062 28.7004 12.7614C28.1601 13.0133 27.542 13.1392 26.846 13.1392Z"
                                            fill="#F9FFFB" />
                                    </svg>
                                </span>
                                <span class="cart-text">
                                    Wishlist
                                </span>
                            </a>
                        </div>
                        <div class="header-cart">
                            <a href="cart.html" class="cart-item">
                                <span>
                                    <svg width="35" height="28" viewBox="0 0 35 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.4444 21.897C14.8444 21.897 13.2441 21.8999 11.6441 21.8963C9.79233 21.892 8.65086 21.0273 8.12595 19.2489C7.04294 15.5794 5.95756 11.9107 4.87166 8.24203C4.6362 7.4468 4.37783 7.25412 3.55241 7.25175C2.7786 7.24964 2.00507 7.25754 1.23127 7.24911C0.512247 7.24148 0.0157813 6.79109 0.000242059 6.15064C-0.0160873 5.48281 0.475637 5.01689 1.23232 5.00873C2.11121 4.99952 2.99089 4.99214 3.86951 5.01268C5.36154 5.04769 6.52014 5.93215 6.96393 7.35415C7.14171 7.92378 7.34055 8.49026 7.46382 9.07201C7.54968 9.47713 7.77881 9.49661 8.10566 9.49582C11.8335 9.48897 15.5611 9.49134 19.2889 9.49134C21.0825 9.49134 22.8761 9.48108 24.6694 9.49503C26.0848 9.50608 27.0907 10.4906 27.0156 11.7778C27.0006 12.0363 26.925 12.2958 26.8473 12.5457C26.1317 14.8411 25.4124 17.1351 24.6879 19.4279C24.1851 21.0186 23.0223 21.8826 21.3504 21.8944C19.7151 21.906 18.0797 21.897 16.4444 21.897Z"
                                            fill="#6E6D79" />
                                        <path
                                            d="M12.4012 27.5161C11.167 27.5227 10.1488 26.524 10.1345 25.2928C10.1201 24.0419 11.1528 22.9982 12.3967 23.0066C13.6209 23.0151 14.6422 24.0404 14.6436 25.2623C14.6451 26.4855 13.6261 27.5095 12.4012 27.5161Z"
                                            fill="#6E6D79" />
                                        <path
                                            d="M22.509 25.2393C22.5193 26.4842 21.5393 27.4971 20.3064 27.5155C19.048 27.5342 18.0272 26.525 18.0277 25.2622C18.0279 24.0208 19.0214 23.0161 20.2572 23.0074C21.4877 22.9984 22.4988 24.0006 22.509 25.2393Z"
                                            fill="#6E6D79" />
                                        <path
                                            d="M23.7061 13V11.8864L27.1514 8.31676C27.5193 7.92898 27.8226 7.58925 28.0612 7.29759C28.3032 7.0026 28.4838 6.72254 28.6031 6.45739C28.7225 6.19223 28.7821 5.91051 28.7821 5.61222C28.7821 5.27415 28.7026 4.98248 28.5435 4.73722C28.3844 4.48864 28.1673 4.29806 27.8922 4.16548C27.6171 4.02959 27.3072 3.96165 26.9625 3.96165C26.5979 3.96165 26.2797 4.03622 26.008 4.18537C25.7362 4.33452 25.5274 4.54498 25.3815 4.81676C25.2357 5.08854 25.1628 5.40672 25.1628 5.77131H23.6962C23.6962 5.15151 23.8387 4.60961 24.1237 4.1456C24.4088 3.68158 24.7999 3.32197 25.297 3.06676C25.7942 2.80824 26.3593 2.67898 26.9923 2.67898C27.632 2.67898 28.1955 2.80658 28.6827 3.06179C29.1732 3.31368 29.556 3.65838 29.8311 4.09588C30.1062 4.53007 30.2438 5.0206 30.2438 5.56747C30.2438 5.94531 30.1725 6.31487 30.03 6.67614C29.8908 7.0374 29.6472 7.4401 29.2992 7.88423C28.9511 8.32505 28.4672 8.86032 27.8475 9.49006L25.824 11.608V11.6825H30.4078V13H23.7061Z"
                                            fill="#F9FFFB" />
                                    </svg>

                                </span>
                                <span class="cart-text">
                                    Cart
                                </span>
                            </a>
                            <div class="cart-submenu">
                                <div class="cart-wrapper-item">
                                    <div class="wrapper">
                                        <div class="wrapper-item">
                                            <div class="wrapper-img">
                                                <img src="https://cdn.dribbble.com/users/9378043/screenshots/16832559/media/10b207c918d604662e088308d16b366d.png"
                                                    alt="img">
                                            </div>
                                            <div class="wrapper-content">
                                                <h5 class="wrapper-title">Netflix 1 Year</h5>
                                                <div class="price">
                                                    <p class="new-price">$20.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="close-btn">
                                            <svg viewBox="0 0 10 10" fill="none" class="fill-current"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="wrapper">
                                        <div class="wrapper-item">
                                            <div class="wrapper-img">
                                                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEBUQERIVEBAQDxUVFRAXFRUVERUWFRUWFhUVFRUYHSggGBolGxUVITEhJSktLi4uFx8zODMsNygtLisBCgoKDg0OGhAQGy0lHSUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALcBEwMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAEAAEDBQYCB//EAEgQAAEDAQQGBwQIBAMHBQAAAAEAAgMRBBIhMQVBUWFxgQYTIjJSkaFCscHRFCMzYnKSovAHFSSCQ7LhU3N0s9Pi8TSDk6PC/8QAGgEAAgMBAQAAAAAAAAAAAAAAAgQAAQMFBv/EADMRAAEDAgMECQQDAAMAAAAAAAEAAhEDMQQSIUFRYfAFEyJxgZGhwdEyQrHhFCPxFWKC/9oADAMBAAIRAxEAPwDdpUT0Tp1JJUSTpUUUSSAT0TqlE1E6SeiiiZPRPRKiiiaieidJRWmoknT0UUTJJ6JUUUTJJUT0UUTJlxaJ2sFXGm7WVRW3Sbn4N7LfU8VvRw76trb0rXxTKWlzu+d354Kwtuk2swb2neg+apJ7Q55q41UbWkmgxP7zXZutz7R2eyPmurSospWGq41au+qZefjyTMjJxyG04BJ8zW5do7TlyHzQ1othOvlqHAKumtKabRLrrJGWi2E5mqr5rUuI2vkNGNLtpyA4k4BGQ6IaMZXXj4W4N5uOJ5AcUx/XTvfcpEKrMpcbrQXE6gKnyCKi0PI7F5EY2d5/kMuZVqJGsFGAMGwYV4nM80FaLfqGexQVXu+gRz5KxwUkej4GYkGQ7XGo/KMPOq6ktzWigo0bAAB5BBOjmdqEY2vNP05+ihdZYx35HP3CjR54k+igYCe06fX9K43lST6WA1oX+Yud3GudwBPuXYtMTTRkba6sL7vN1Sp79pflG+m/sj9VAtcuX7QO8q4A2eyEraD/AIbhxo33kLnqrR4QP72fNGfy+0HMsbxfX/KCkNFv1zNHAOPvopnbvHhJV5huHmg+qn2D87fmkjf5Wf8Ab/o/7kymdu8eRUzDgvSU6VE4C8YvRpAJ0k6iiZOnonUUTUTpJUUVpkl1RPRUomonoknUUTJJ6JUUUTJ09FBarUyMVccdmsq2tLjAQuc1ozOMBSFVtu0s1uDO0duofNVlv0m6TDut2D4oOOMuxyHiOX+q6dHBBvaqeS5VfHud2aeg37f1+e5dTTOcauNSV11QGLzT7o73PYuXTBvdz8Zz5bEDNOug1pdbQLnIqa1YUHZGwfHaq+a0LgXnmjAXH0G8nIBFxaPaMZDfPhFQwcTmfTmtgGU7qKvjY+Q0YK0zOTRxJwR0OjGNxkPWHZiGD4u9ES+XCmAAyAwA4AKEuJxGA8RwHnr5KGo420HO1TU2Ukk4AoKADIDADgAhXSud3RXfkBxJwCdor3WmU7cox+955Lt1nLvtJKDUxg+JwHIFUAG8+3+K9BdCShoxkfX7rcBzcfklEXkfUxXQfb7oP97s/NWMVkDcWxgHxOxd5uy5Lp7a4uf5VJ+CnWi1+dwVZlW/y5x+0lA3NBcfM0A9VIywQt9kvO17ifQUCNNwai7iaDyHzXPWbGtHKp9aq+seeYVZlzG+mDAG7mNA/wAqRjefZPPD3p3TOOs8NSjKETfn2QpzC7cP7m/NcGE7W/mTlRuRQd6vwXXUO+7+ZvzTKNJFCtegJJLqi8ovUJgE6dJRWmT0T0TqlEwCdJJRROlRIBOoomASonT0UVpk5UVomawXnGg9/BZ7SOlHSYDss2beK3oYd1U6W3pXEYplHS53fKP0hpgN7MeJ8WrkqKSRzjUkuJ5lNGwu4DMnILp8obg3m7WfkF16VFtIZWDXm64tWq+qZefhLqw3F+J8OrmfgFBPaSeWQ1DgFDLMmis7n4nsM8RzP4Rr9yZDAO05ZKJ8pJoMScgMSVNFYdcpp9wHH+46uXoiGXWCjBSubvaPP4BcgkmgFSdQVlxOg0Hr+lO5dl4AutAa3wjL/U7yoiScstpwHmimWPW88tXM/vmpGkeyC4jWMAOeocKLHOB9KuIQrbOTqx+8D6MzPOi7Nnbm83j97GnBgwHAqZx2uAHhb8Tl71GZGjJo4nE/L0VguNlRKQxyDn05NHIZeaejhrbHwz/SuSXu1OdwBIXJgf4HeRVADeOedypItbrc53AU9TVK8zwk8XH4UUT43j2HflKGknpgcDsOC1aydvr8KkZ1zfA31PxTfSR4G+R+arzaVz9IR9UrVh17dbByJ+a5Nw5OLTvAcPSiB65P1ivqlamnjeBWl5u1uPmMwgTakSyYg1BoU1ogZLn9XJ4wMD+JvxGPFG05fqHPd8eSKAUL9JSQUtina4jqi6ntBtWngdaS3hm8eavIvW6J0k9F4pelSonASTKKJJwnonJAFTgFFaaidBz6Uib7V47Biq+bpD4GcyfgFuzDVX2b7JZ+Losu7y1/CvU9FlJdNzHIhvIISS3SOzkJ5lMN6OqbSB6pc9It+1pPotsSBmaIS3aQZG2tQ4nIBZRrKdp5J2NrnvO5cSyEmpWrOj25tTI54rF/SLyIa2PVT2y2OkNXHlqC4jjwvOwb6nh80zYw3F2epvxd8lBPPXEroNbplbbmy5xJOpUs1o1DADIIXFxo0VP7z2BSMs5Pad2W/qPAauJUpeALrRdbs27ydZRCBo1Rcsga3E0e79A5a08khOJxXUcJdjk3xHLltRcLQMWD/wB13/5GrlUoXOi+pUUEdkPeebjd/ePAIhjqCkbQ1vjdr+fquC4Vwq9x1nHyb807m63ux8IxPM5BZOJN+fD58lUrlzhXXI7flyCdzHHvEMGz5NGSYzUwaLo3Z8yoHSIgCeeQhlS9gai7jgPIfNLryMgG8AAfPNCunCjdaUYpTdVqi3yk5knmoi5Cm0rg2haCmVYRZedqc2h1KVqNhxHkUH16XWour3hXKllhjdm24fEzD9OSrrVYHtF5h61gzIHaHFvyqjL6dshBqDQhG0ubY+aIFUrbQu2zqytthbNi2jJtuTH8dh3+e1Z9xc0lrgWuaaEHMFN0y2oNL7udnFEWq0bMpWSKpZMiYpVTqaGIVu20kClT5pILrElj1YRyvUAkkTTcFX2rTDG4N+sdu+a8iym55holehqVWUxLzCsaIa06RjjzdU7MyqK1W+R/eddHgHxVe+cNyoN+Z80/SwE/WfAfP6XNq9JbKY8T8fKup9NPPcaGDxH/AFwVXPaC7F8hdwqR60VVNpCputBe7YKkoaXrT33NiGyt53kPiV06WEbT3D8+5SL6lSrq8z3/ABZWj7Swaq8T8qIaTS7BkG+VfeqeZ8Qzc+Q8Q0eQqfVH9G9Dvtz3ss7ImujaHEyF+RNMMCmnUabGl75gXJsrZRc8wL8En6epkQOAA+CtLBaJC0SPJAIqxm0eJw2bBr4Z2Wj/AOHtpa69KbOQB2WNrQn7xuDAbNaKHRid8r47zL8bWOcS51KPvUobv3SkquKwn0scI2nkea1dgqwjsn07/ZUj3lxqcSVMAGZ4v9G/M+5aGPodO0YPjvHXV2HDs+qobdo50Ujo5XCrKVumtagHCowz1oGV6VQ5WuHcs6mHq0xL2kBCVc80GJ17t5OpSNY1n33bfZHAa+JT369looNTRr47SpGQAd7tO8A+JHwWpds9Fgow1zzt2nUOJU8UI1C+RmcmDzz5+Skc2neyGUbcAOJ/ZXN8u7LRgNQwaN5+aAuJtZRO9wGJN936BwGv94JFpOLzdGraRuGxcktb9523UOA+JQs1q2mpUa0m3PchKKdMBg0XR6niULJOgZrWgpbUmWUFUSrGS1oaS1qtfaFC6ZNNoIoVg+1KI2hAGZcGVbCiiyI82hLr1XdYl1iLq1eVWQnXbZ1ViVdCVUaSrKrZs6mZKqdsynjnWbqSmVWzXLjSti65l5v20Yw++0ezxGry2IeKZWFmkxBGYS7g5hzC4RsJlY5kiJilU/SaydXNfaKMmF4bA72x5481WRyLoNcHtDhtWpZIkK161JBdYkhyIMq9DtVre/F7qDUwfL4lCPloMOyPU8SopZgN5PMlVdttdMDiTgI2513ke4Lk0qNgOeeSsu08yUVPbsw3GmZyA4nUovo1e1M408AwJ46x+8F1DHcAc+hkzDR3I+A1u3/+ULap0w1smGeasCLLq0W4NF1gDG7BhXicyqiWdzjRoLidQBJ8guLTKrOwH+lvMzDiJdta1aTupTmCmg0UmzFzzK0a3aq7+XSnvFsf4nY+Talb3+D9mDJ56Pvkwtr2aAds664+SwE8xWx/hQ6YzTiF0bXdUwkyNc4UvGlLrhtS3SbXnB1JIsOAuE7g3EVm87F7Gqqx0+mWjb1dnr/9lPikGW7W+zf/ABy/9RAWcWr6TMGuhDwyG8Sx5aQesu0AfWuBrU7F4trBDu0Lcd44LtPdq3Q39itIvOOlUNbZKXG62se8n6tuQW0DbZTv2ev+7lp/zFjNN1baJDJdfL2bxaCIx2G0utJJypmU50eMtQwRb3CR6Vd/SNPu9ipNGaOZJZpXi8x8YqKUN5lK1OFTk7WBkuujtgbPI5pqxjW1LgRfNSA0EkZZ4bk/RG2/1XVuxEzHNPEdoV5Bw5rtzDZLFIa/WSWi4DTVET8Wu801VLw51OdXFuXxv5QUjSp0yxlUjQB2bjFvOUDNowi0mAkhvWhg8RqRQ+RzROkG2SGSaFzntEbG3KAm9IW1NSBvbnvxV0Yg+3Q2kYRvspmJ1VaA3Hk9vks/0Vt5mbpKU+3AX02XhMQOWA5KhUc9uckw1rZjTtF0cedFqMK1j8kDVzokT2Q2bSNp91mJ7WgLRaCDQ1B2HArYt0u6z6Ds80YaZfpD2se5od1ZL5iXtBwrQEf3KLTE7rdomCeW79I+lCLrA0DBznMxA1d0kbWrqMxBa+Czs5yyZ1nfEW03pYYIZNHdrKHRGw8Z9liHykgkAkDM0wHHYr/pno6GCCxPiZcdaLPfebzjeddiNcSad45bVc9Mukcuj5Y7HYwyGKOFriCwOLy4kUdXV2cSMSScUdpyystlo0Ux7AyKWCSQxjABojjk6sbsAOCr+Y4upVnNy0yHm8kgNJ1GkWm570y3CNaHsBl3ZFra7D/i8uo4i8AS0Zuobvmoi9b7SXTy0xaQdZ42xts0M/U/R7gxY11x2OYJoaUwGGB13rLDHHb7Xo5gDIrfYetawYNbJ243Bo1VxdyTD+kX0hNWnEtzCHTpImdNCAZ3HeFG4JrjDXWMHSNfOy8gvpry9R6EQsZYmWKUXZdKttRAOBaI2hgHkC4c1TxSssmibPHOCPpmkb80ftGGCRokFNf2bPzLb/kQajqYZJDg0a3Halw0sMru/eFX8PshxOye62l+KxN1129dN3xUN3zyVp0e0Q20l7pLRFZoomtc+SQ6nVoGDC8cDhVb7pdNbXwSy2KaK0aNdAWOhjay9G25R5wFSRicDh4cF5C92fNFhcS7F0i5pDTw7RHAggQdmoidRMKVaDaLwDqPL3K9C0/0NjZbWWWKZsMYsYlknmdhhI5jjqFe7hhrQXTXQUFjjsroHulFojkeZTk8Dqy0tb7Io8+iJ/jQf6+L/hI/+bMn/iQ7+k0X/wAEf8lnSeFqVnfxnOeSHB0jeQ06k7fwFtWp0/7QG2j28ljBIpmyIEPXbXrtELmFis4plZ2SZZ+ORHWaZYVachAWwrfpLBfsZfrieHcj2Xe8HksUx637PrLLM3bC73V+C85Y9Y4R0Bzdx/KapCQjr6ZD30k3KvKtbbrdSoZzd7R+Q3LnQ0XemOJabrPxEVceQI/MgpwrLQZDo3xjvNffptaQAacLo80pUAZS04Sk2ruV6rrS5Hztoq20IqQVKvncutE6SMMtT3H9l4OIIO0bvmobQgZU08BzS02KbpAEarUaY0dQdbHjHrGZZXbtbsP7Op/gp/6m0f7hn+crJ9F9JXmdWcXRilDiHMOFCNY1eSOFun0c91osZaI5gGuDm37hrUNx1bDyXMxQfVoPw/3HQE94OvOvffbDEUqwzbF72qqxt/rLQcMY7Phrw6z5rzro103t07HvkeygfdaBGBkASTjvHqrWHTlpvuka4X3taHG4KUZW7w7xXmT0bXplzXRuvxB3J6r0jRa8DXQ7uB+V6KvN+lURNslJN1lY8faP1bch8VLN0snaPtGuO26KclmtKaXdI90jyC91KkCgwAAw4AJro/BVqdQuNoj1CSx2NpV6YbTmZm3Ao2HSIhe1zBQMc11NbrpriddcRzS6WdKG2q4GMMbY7xIJGLnEY4cPUrMWi1oGWddtmAYXtqH6h7pBlR4YaYOhutnF03DbAbJ1bjKY3sEtRdDXk88GmnIKn6O9JG2WO1McxzzaouraQQA00kFTXV2xlsWbfKonPTDejaIa5saOMnvmUwK9XM1xOoEBaS29IWv0ZFYQxwfFM6QyVFwgmXADOv1g8imd0kb/ACxthDHiRs/WdaCLveJFNdcVly9cl63GCpmNLOz/APr41tZEKj/TL4LeW7pjYrU1kltsb5bTEy7eZJcikpjR1DUCtTShpUobT/TvrZbHPDH1Mtia6oNDGS4MBa0A1uUa4baFZGz2SWT7ON8n4WkjzAVjB0YtLs2tj/G9o9BU+iWGBwlIiTaYBcSAHAggAkwNVs7EvjUgW3C1lqJel2i3yi1yWGU2qoeQJB1JeMnHtCuIGN3kVQt6XSnSTNIyCrmyD6tpwEdCwxtJ+6TicyaruLogfbnaNzWOd6m6iW9FINckruAY34FZNp4OmCAS7TLqXGGnYJsO5ZuxoO0XnQbU2l+mYl0jBbIo3RxWW4GxEit0OJkywBcHEeS46U9LI7Xa4JepIs0F2tncW1dWS/LiMBeFByUx6MWbbN+dn/TUcnRaDVJK3jcd8AoxuEYWFoMtBaO4z66nXidqhx2aQTczZFt6XWGzQzt0fZpopbTHcc6WS8xoo4VaLzrxF40rT4LCOOC0Np6KvH2UrH/dcDG7lmPUKittjkhN2VjmHVUYHgcjyTOFbRYSWEkm5cSSYt9WugRmr1sWgbloOnfSVlvtLZ2Ruja2ztjuuIJq173Vw1dseSbpV0kZa4bHE1jmGx2cxOLiKON2IVbTV9Wc9qy9U1UTMLTYKYE9icuu/TxWhe45p23U4epA9DBycOTErAtRjHomGRVzXqeORSVm5i1+gZqiRu2Fy8+ILSWnNpoeWC2vR11RKdkVObnN+AKyWm47tofscb35sT61Sf01HeCPD/UW9yivJKG8ktMyYyLZWliCbM6N4ew3XNNQVobVo8uFYzf+7k/y18iVn7SyilF7XiFx2SDqr6yaShtAuupDN+h3DZwQWkbE5mJBp4s2+YwWelCstF6ffGbr3GmV6uI/FtCo0DTM07bj7FMGmXahBWgKtlW6dLG/F0cb667or5jFDS6Psrs4ab2vePeSFP5G9p58kVOqG3WPsFrMUrZNQNHDa05/vct5A4OF2l9kgoW53gVWv6FsfRzJHwtJyeA8kfdpdPnhvWl0bZGwsEcQPZbS+cZDxOrgEnWrsNteebIq9ZhAIuhdB6L+jscx5qOucWgd4tIFL3hOGSJtdswoMANQyRMlnfTu+eHvQU2jXOzexvmT6Cnql2ua52Z51SbiXGSqm1WtVs1oWhGgGHvSPd+Fob6klTR6Es4/wy/e57vc2gTjcTRYNvPeQrBCxkkqaOGR/cY5/wCFpd7gt9HZY2d2KNu8Rtr5kVUzpDrcabK4Ij0gPtb5/wCe6IVBsCw8XR21O/w7g2vc1voTX0RsPRJx+0mY3cxrnn1uhaYyNCjdagszja5tA8PklX1rtirIOjFnb3uslO9wa3yaK+qsYNHwx9yGNpGu7ed+Z9SuHW0KF1uWLjWf9RJVEuNyrJzycyTurguKhVbrcozbVBQKHKFbl4TGQKnNsTfTEXUFXlVsXhcEhVv0tOLUp1JUyo1y4fQtLHAPYc2OFWn5HeEOLSuhKryb1AI1Wc070fuNM0FXRDF0ZxfHvr7TN+Y17VnKr0uJ9DUfvisd0p0UIZA9gpDNUtHgcO8zhjUbjuTFGsZyu8D7c3T1Gpm0KpryV5cVSqmcyYhTtcpmPQgcu2vUlCWradHWUs7n/wC0loODB83nyWa6VspI120EeWI95Wyhg6qJkWuOMB34j2n/AKiRyWV6UtqyvhcD8PilGnNmdzw9Erh3f3Txj2WcqkrvR/RiWWJsoeGB4qGnOmo8xjzTIOsCeNRgMSFoLHpsZP7J26v9Fa2qzNtLC5tOuAqD4xsO/YVFb+jLZHh7XiEOFXxgXrrtd2hpQ7K4I/ReiY4DVpe8g17TqNrua2nvVVKtKA9mjt3tuXKLmDasTaoqZ4LiHRE8n2cL3A+1dIb+Y4eq9IDRW8Gta4+0GAO86VXZqcySid0g6NG+v+KNr5bBZLQ+gLU3CQxsZqBeXOHJlR6rSWGwRx4msj/FQBo4A1x3okNXeCTqVnP0J8tFm+o5xnRNeGd0V2mrj64J7zttNwwHoo3TAKCS2hZhhOxBCJLNq5LgFWS6QQUtvW7KDirDVdvtICHkt4VBLbt6FkthTDcIjDVoJNI70JJpDeqJ9qUTrQmW4UBGGK6fb96gdbd6qjOuDMtRQARZFaOtijNqVYZU3WourARdWrI2lcm0qu61LrVeUK+rVh9IS+kKv6xLrVMoV5FZC0LsWhVglTiVVlCmRWrbSpmWhUwlUzJkBYChyK+gtCm0tZOuskjM3Nbfb+JmPqKjmqKKdaTo/OHm6dnpkUpiGZBnGxUJaZC8xqubyktLLr3N8L3DyJChJW8rqQuw5XHRaydbaW1FWRfWO2dki6Obi0cKqjqt50YsXVWYOdg+ejzuYPsx5Eu/uGxZVXw2N/J9FjiH5GE7bBWVqfnvVLaLEJnXHYMzedjRnzOAG8qztMignPVsu+2+hdu8LeWfE7lTQQ2N/M87YXNDsgkX2KOSfE0BoMAB3QBgAOAFOSSAvpLUAARCHqW7Qtu0rsKBrlI1y5hCCFO1dKEOXYcghRduKCnnRJaXZAngKoaWwvPhbxPwFSiaWi5Vwqye1IKS0lXf8lae9I47mtp6n5KWPREI/wAO9vc5x9BQeiZFek3ZKkhZaS0IcvJyBPAVW8ZZ2t7rGM4MaD50UhefEfMov5wFm+v6RSdy87fG/wADvylCyPpgcF6UXnxHzK4e8nAm8NhxHkVo3H/9fX9Iw7h6rzIyLgyLfWvRFnk70TQfFH9W7yHZPMLOaT6LvaC6AmZoxLKfWgcMn8sdyZZjabr6d/z8rZjmnSyojIlfUJcuapklb5VNfTX1DeSvIZV5VPfXN5Q3kryqVMqmvpX1DeSvKpVwiL6e+hrye8pKmVECRSNkQYeuw9DKrKjmSrRdE5v6gD7jyeTarJtkWk6HjtSy6mRXB+KQ4ejXLDER1Thzros6jYBKy2nIblokGovLhwca/H0QCv8ApXFi1+zsn3j4rPgEkACpJoAMyTkAgJhOUTmYFadHdG9fOA4fVM7ch+6Mm8XHDz2Lc2iauKB0VYRZoRHh1jjekP3tTeDRhxqdakbV7ro89QAzJWbe12jb2XOr1esfpYW+V3HTGR3dbkNrtQ4DM8tqqbXOXEkmqK0laR3W4NaKD4k7yqpzlsxu1YsGbXyXV5Oob6dbQtoW5a5ERQOONKDacB65ouOIN7oDd+Z8zipAzauI6ruSkqBkA1mu4fM/JTNbsaOJxPrh6LugTF4WRJN1NUiCcyeGryTXQFFJOhZrWjawlXCMdIAh5LWAqye2qtntqZp4YlErqXSCDl0nvVHNa0HJaU6zCBEGq+fpXeoTpY7Vn32hQm0LcYdgRikVphpg7VPFpoa/9VjzaF0LShOGYdiPqitXpHQ0dsrLE8RzDvVHZfsLgMj94VqshpLR0sDrsrC3Yc2u/C7Io2w6UdE8PacQctRGsHcVvHvjmiFQHxyNDgCKggio5j3hLuc/DkC7fUcJWge6nfULyqqVVo9OdGCyr4KvZrjzePw+IevFZqqYZUDhITLC1wkLqqaqaqVUUooT1SqmqlVSVIT1SqmqmqpKkLqq6vKOqa8qzKQpQ9b3Rtm6iytYcHv+sftBcBdbybTmSs30S0X1svWvFYoSCRqe/NrOGs7hvWp0hNnXMpWq7M4MGy/PPmEpiXa5B4+yzmmmXmubtGHEYhRdFdHXR9KeNvVNPkZOWIG+p1BWUVmEjiXYRt7x1n7o3n0Ce1WmpoKAAUAGAAGAAGoLZ7M5AHis+tLaZYNv4Usk1TtXdpk6pl323d4+5o4a9/BNZx1besd3yOwNg8XHZ57FUWq0XihMEwLc89/csA3MYXEslSoHPTOch5JFqNE01i76xJCdYmVZ1tkK9pXLnpJLhhctRPlQ0syZJbMARBCTTqvnnTpJ2m0K1XzzIKWVMknqYCJqFkkQz3pJLdMsCgc9Rl6ZJZkphrQuC9K+kkglaABN1i3HRK1l9munOGQt/tIvj1vpJJbE6t8QssQB1Z8PyrZ71n9OaFbJV7KNk17Hcd+9JJYM0KRpOLTIWPc0tJacCDQhJJJMyuqkkkkrlUmqmSSVSrTIjR1idPK2FlL0hpU5AbTwGPJMkgqHKwkKEwCV6VBZ2QxNij7jBgTm4kVc9281B9NSr5QXupWgpUnYBmUySwpaNLtq5AJOp2oG22odxoo1uQ95O9LR8AI61+LGmgb4nDHHcKjikknHjKwAbVRMNJQ+kbYXEqte5JJCEyxoAgKCSRCySJJKnFNMaE8VjkcA5owOWXzSSSWMo5X/2Q=="
                                                    alt="img">
                                            </div>
                                            <div class="wrapper-content">
                                                <h5 class="wrapper-title">Windows 11 Pro Key</h5>
                                                <div class="price">
                                                    <p class="new-price">$10.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="close-btn">
                                            <svg viewBox="0 0 10 10" fill="none" class="fill-current"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="wrapper">
                                        <div class="wrapper-item">
                                            <div class="wrapper-img">
                                                <img src="https://masudec.com/wp-content/uploads/2023/03/kaspersky-anti-virus-2021-1-user-1-11637560504.webp"
                                                    alt="img">
                                            </div>
                                            <div class="wrapper-content">
                                                <h5 class="wrapper-title">Kaspersky 1 year</h5>
                                                <div class="price">
                                                    <p class="new-price">$15.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="close-btn">
                                            <svg viewBox="0 0 10 10" fill="none" class="fill-current"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="wrapper">
                                        <div class="wrapper-item">
                                            <div class="wrapper-img">
                                                <img src="https://storage.googleapis.com/gweb-uniblog-publish-prod/original_images/youtube-logo.jpeg"
                                                    alt="img">
                                            </div>
                                            <div class="wrapper-content">
                                                <h5 class="wrapper-title">YouTube Premium</h5>
                                                <div class="price">
                                                    <p class="new-price">$10.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="close-btn">
                                            <svg viewBox="0 0 10 10" fill="none" class="fill-current"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="cart-wrapper-section">
                                    <div class="wrapper-line"></div>
                                    <div class="wrapper-subtotal">
                                        <h5 class="wrapper-title">Subtotal</h5>
                                        <h5 class="wrapper-title">$55</h5>
                                    </div>
                                    <div class="cart-btn">
                                        <a href="cart.html" class="shop-btn view-btn">View Cart</a>
                                        <a href="checkout.html" class="shop-btn checkout-btn">Checkout Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-user">
                            <a href="user-profile.html">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                        class="fill-current">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M20 22H4v-2a5 5 0 0 1 5-5h6a5 5 0 0 1 5 5v2zm-8-9a6 6 0 1 1 0-12 6 6 0 0 1 0 12z">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="mobile-menu d-block d-lg-none">
            <div class="mobile-menu-header d-flex justify-content-between align-items-center">
                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
                    aria-controls="offcanvasWithBothOptions">
                    <span>
                        <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="14" height="1" fill="#1D1D1D" />
                            <rect y="8" width="14" height="1" fill="#1D1D1D" />
                            <rect y="4" width="10" height="1" fill="#1D1D1D" />
                        </svg>
                    </span>
                </button>
                <a href="index.html" class="mobile-header-logo">
                    <img src="./assets/images/logos/logo.webp" alt="logo">
                </a>
                <a href="cart.html" class="header-cart cart-item">
                    <span>
                        <svg width="35" height="28" viewBox="0 0 35 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.4444 21.897C14.8444 21.897 13.2441 21.8999 11.6441 21.8963C9.79233 21.892 8.65086 21.0273 8.12595 19.2489C7.04294 15.5794 5.95756 11.9107 4.87166 8.24203C4.6362 7.4468 4.37783 7.25412 3.55241 7.25175C2.7786 7.24964 2.00507 7.25754 1.23127 7.24911C0.512247 7.24148 0.0157813 6.79109 0.000242059 6.15064C-0.0160873 5.48281 0.475637 5.01689 1.23232 5.00873C2.11121 4.99952 2.99089 4.99214 3.86951 5.01268C5.36154 5.04769 6.52014 5.93215 6.96393 7.35415C7.14171 7.92378 7.34055 8.49026 7.46382 9.07201C7.54968 9.47713 7.77881 9.49661 8.10566 9.49582C11.8335 9.48897 15.5611 9.49134 19.2889 9.49134C21.0825 9.49134 22.8761 9.48108 24.6694 9.49503C26.0848 9.50608 27.0907 10.4906 27.0156 11.7778C27.0006 12.0363 26.925 12.2958 26.8473 12.5457C26.1317 14.8411 25.4124 17.1351 24.6879 19.4279C24.1851 21.0186 23.0223 21.8826 21.3504 21.8944C19.7151 21.906 18.0797 21.897 16.4444 21.897Z"
                                fill="#6E6D79" />
                            <path
                                d="M12.4012 27.5161C11.167 27.5227 10.1488 26.524 10.1345 25.2928C10.1201 24.0419 11.1528 22.9982 12.3967 23.0066C13.6209 23.0151 14.6422 24.0404 14.6436 25.2623C14.6451 26.4855 13.6261 27.5095 12.4012 27.5161Z"
                                fill="#6E6D79" />
                            <path
                                d="M22.509 25.2393C22.5193 26.4842 21.5393 27.4971 20.3064 27.5155C19.048 27.5342 18.0272 26.525 18.0277 25.2622C18.0279 24.0208 19.0214 23.0161 20.2572 23.0074C21.4877 22.9984 22.4988 24.0006 22.509 25.2393Z"
                                fill="#6E6D79" />
                            <circle cx="26.9523" cy="8" r="8" fill="#AE1C9A" />
                            <path
                                d="M23.7061 13V11.8864L27.1514 8.31676C27.5193 7.92898 27.8226 7.58925 28.0612 7.29759C28.3032 7.0026 28.4838 6.72254 28.6031 6.45739C28.7225 6.19223 28.7821 5.91051 28.7821 5.61222C28.7821 5.27415 28.7026 4.98248 28.5435 4.73722C28.3844 4.48864 28.1673 4.29806 27.8922 4.16548C27.6171 4.02959 27.3072 3.96165 26.9625 3.96165C26.5979 3.96165 26.2797 4.03622 26.008 4.18537C25.7362 4.33452 25.5274 4.54498 25.3815 4.81676C25.2357 5.08854 25.1628 5.40672 25.1628 5.77131H23.6962C23.6962 5.15151 23.8387 4.60961 24.1237 4.1456C24.4088 3.68158 24.7999 3.32197 25.297 3.06676C25.7942 2.80824 26.3593 2.67898 26.9923 2.67898C27.632 2.67898 28.1955 2.80658 28.6827 3.06179C29.1732 3.31368 29.556 3.65838 29.8311 4.09588C30.1062 4.53007 30.2438 5.0206 30.2438 5.56747C30.2438 5.94531 30.1725 6.31487 30.03 6.67614C29.8908 7.0374 29.6472 7.4401 29.2992 7.88423C28.9511 8.32505 28.4672 8.86032 27.8475 9.49006L25.824 11.608V11.6825H30.4078V13H23.7061Z"
                                fill="#F9FFFB" />
                        </svg>

                    </span>
                </a>
            </div>

            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions">

                <div class="offcanvas-body">
                    <div class="header-top">
                        <div class="header-cart ">
                            <div class="header-compaire">
                                <a href="compaire.html" class="cart-item">
                                    <span>
                                        <svg width="34" height="27" viewBox="0 0 34 27" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M22 16.0094C21.997 22.0881 17.0653 27.007 10.9802 27C4.90444 26.9931 -0.00941233 22.0569 1.3538e-05 15.9688C0.00943941 9.89602 4.95157 4.98663 11.0422 5.00003C17.0961 5.01342 22.003 9.94315 22 16.0094ZM6.16553 15.7812C6.40365 12.6236 8.72192 11.2861 10.5868 11.1993C12.3305 11.1179 14.4529 12.3353 14.7465 13.6143C14.2425 13.6143 13.7459 13.6143 13.2429 13.6143C13.2429 14.0241 13.2429 14.3986 13.2429 14.7975C14.308 14.7975 15.3374 14.8064 16.3668 14.793C16.7805 14.7876 17.0102 14.5291 17.0147 14.1005C17.0221 13.3414 17.0172 12.5824 17.0172 11.8234C17.0172 11.558 17.0172 11.2925 17.0172 11.0311C16.5836 11.0311 16.2165 11.0311 15.7908 11.0311C15.7908 11.6046 15.7908 12.1572 15.7908 12.7937C13.9379 10.0444 10.8447 9.4545 8.48578 10.4824C6.21811 11.4706 4.90792 13.847 5.04682 15.7817C5.40997 15.7812 5.77609 15.7812 6.16553 15.7812ZM15.8191 16.2178C15.7581 17.4576 15.3498 18.547 14.4742 19.4286C13.5976 20.3111 12.5265 20.772 11.2858 20.8008C9.57472 20.8405 7.568 19.6424 7.2495 18.3892C7.75403 18.3892 8.25013 18.3892 8.76012 18.3892C8.76012 17.9809 8.76012 17.6064 8.76012 17.2041C7.68458 17.2041 6.64178 17.1921 5.59997 17.21C5.19962 17.2169 5.00069 17.4839 4.99771 17.9442C4.99176 18.803 4.99573 19.6612 4.99573 20.52C4.99573 20.6698 4.99573 20.8196 4.99573 20.964C5.4318 20.964 5.79692 20.964 6.20224 20.964C6.20224 20.3895 6.20224 19.8418 6.20224 19.1686C7.07984 20.4912 8.16976 21.3465 9.58216 21.7617C11.0184 22.1839 12.4114 22.0494 13.7548 21.4035C15.8191 20.4113 17.0946 18.1466 16.9507 16.2178C16.5861 16.2178 16.2209 16.2178 15.8191 16.2178Z"
                                                fill="#6E6D79" />
                                            <path
                                                d="M6.16568 15.7814C5.77624 15.7814 5.41062 15.7814 5.04648 15.7814C4.90757 13.8471 6.21777 11.4703 8.48543 10.482C10.8444 9.45411 13.9376 10.044 15.7905 12.7934C15.7905 12.1569 15.7905 11.6042 15.7905 11.0307C16.2161 11.0307 16.5833 11.0307 17.0168 11.0307C17.0168 11.2917 17.0168 11.5571 17.0168 11.823C17.0168 12.582 17.0218 13.341 17.0144 14.1001C17.0104 14.5287 16.7802 14.7877 16.3665 14.7926C15.3371 14.8055 14.3076 14.7971 13.2425 14.7971C13.2425 14.3982 13.2425 14.0237 13.2425 13.6139C13.7451 13.6139 14.2417 13.6139 14.7462 13.6139C14.4525 12.3355 12.3302 11.118 10.5864 11.1989C8.72207 11.2862 6.4038 12.6237 6.16568 15.7814Z"
                                                fill="white" />
                                            <path
                                                d="M15.8191 16.2178C16.2209 16.2178 16.5865 16.2178 16.9502 16.2178C17.094 18.1466 15.8186 20.4108 13.7543 21.4035C12.4109 22.0494 11.0178 22.1834 9.58161 21.7617C8.16971 21.3469 7.07978 20.4912 6.20169 19.1686C6.20169 19.8418 6.20169 20.3895 6.20169 20.9639C5.79687 20.9639 5.43125 20.9639 4.99518 20.9639C4.99518 20.8201 4.99518 20.6703 4.99518 20.5199C4.99518 19.6612 4.99121 18.8029 4.99716 17.9442C5.00014 17.4838 5.19907 17.2169 5.59943 17.21C6.64173 17.1916 7.68403 17.204 8.75957 17.204C8.75957 17.6064 8.75957 17.9809 8.75957 18.3892C8.25008 18.3892 7.75348 18.3892 7.24895 18.3892C7.56794 19.6428 9.57466 20.8404 11.2852 20.8007C12.526 20.772 13.597 20.3111 14.4736 19.4285C15.3492 18.547 15.758 17.457 15.8191 16.2178Z"
                                                fill="white" />
                                            <circle cx="25.9322" cy="8" r="8" fill="#AE1C9A" />
                                            <path
                                                d="M26.012 13.1392C25.3292 13.1392 24.7194 13.0215 24.1825 12.7862C23.6488 12.5509 23.2263 12.2244 22.9147 11.8068C22.6065 11.3859 22.4407 10.8987 22.4175 10.3452H23.9786C23.9985 10.6468 24.0996 10.9086 24.2819 11.1307C24.4675 11.3494 24.7094 11.5185 25.0077 11.6378C25.306 11.7571 25.6375 11.8168 26.0021 11.8168C26.4031 11.8168 26.7577 11.7472 27.066 11.608C27.3775 11.4687 27.6211 11.2749 27.7968 11.0263C27.9725 10.7744 28.0603 10.4844 28.0603 10.1562C28.0603 9.81487 27.9725 9.51491 27.7968 9.25639C27.6245 8.99455 27.3709 8.78906 27.0361 8.63991C26.7047 8.49077 26.3037 8.41619 25.833 8.41619H24.9729V7.16335H25.833C26.2109 7.16335 26.5423 7.09541 26.8273 6.95952C27.1157 6.82363 27.3411 6.63471 27.5035 6.39276C27.6659 6.14749 27.7471 5.8608 27.7471 5.53267C27.7471 5.2178 27.6758 4.94437 27.5333 4.71236C27.3941 4.47704 27.1952 4.29309 26.9367 4.16051C26.6815 4.02794 26.3799 3.96165 26.0319 3.96165C25.7004 3.96165 25.3906 4.02296 25.1022 4.1456C24.8172 4.26491 24.5852 4.43726 24.4062 4.66264C24.2272 4.88471 24.1311 5.15151 24.1178 5.46307H22.6313C22.6479 4.91288 22.8103 4.42898 23.1185 4.01136C23.4301 3.59375 23.8411 3.26728 24.3515 3.03196C24.8619 2.79664 25.4287 2.67898 26.0518 2.67898C26.7047 2.67898 27.2682 2.80658 27.7421 3.06179C28.2194 3.31368 28.5873 3.65009 28.8458 4.07102C29.1076 4.49195 29.2369 4.95265 29.2336 5.45312C29.2369 6.0232 29.0778 6.5071 28.7563 6.90483C28.4381 7.30256 28.0139 7.56937 27.4836 7.70526V7.7848C28.1597 7.88755 28.6834 8.15601 29.0546 8.5902C29.4291 9.02438 29.6147 9.56297 29.6114 10.206C29.6147 10.7661 29.459 11.2682 29.1441 11.7124C28.8326 12.1565 28.4067 12.5062 27.8664 12.7614C27.3262 13.0133 26.708 13.1392 26.012 13.1392Z"
                                                fill="#F9FFFB" />
                                        </svg>

                                    </span>
                                </a>
                            </div>
                            <div class="header-favourite">
                                <a href="wishlist.html" class="cart-item">
                                    <span>
                                        <svg width="35" height="27" viewBox="0 0 35 27" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.4047 8.54989C11.6187 8.30247 11.8069 8.07783 12.0027 7.86001C15.0697 4.45162 20.3879 5.51717 22.1581 9.60443C23.4189 12.5161 22.8485 15.213 20.9965 17.6962C19.6524 19.498 17.95 20.9437 16.2722 22.4108C15.0307 23.4964 13.774 24.5642 12.5246 25.6408C11.6986 26.3523 11.1108 26.3607 10.2924 25.6397C8.05177 23.6657 5.79225 21.7125 3.59029 19.6964C2.35865 18.5686 1.33266 17.2553 0.638823 15.7086C-0.626904 12.8872 0.0324709 9.41204 2.22306 7.41034C4.84011 5.01855 8.81757 5.36918 11.1059 8.19281C11.1968 8.30475 11.2907 8.41404 11.4047 8.54989Z"
                                                fill="#6E6D79" />
                                            <circle cx="26.7662" cy="8" r="8" fill="#AE1C9A" />
                                            <path
                                                d="M26.846 13.1392C26.1632 13.1392 25.5534 13.0215 25.0164 12.7862C24.4828 12.5509 24.0602 12.2244 23.7487 11.8068C23.4404 11.3859 23.2747 10.8987 23.2515 10.3452H24.8126C24.8325 10.6468 24.9336 10.9086 25.1159 11.1307C25.3015 11.3494 25.5434 11.5185 25.8417 11.6378C26.14 11.7571 26.4715 11.8168 26.836 11.8168C27.2371 11.8168 27.5917 11.7472 27.9 11.608C28.2115 11.4687 28.4551 11.2749 28.6308 11.0263C28.8065 10.7744 28.8943 10.4844 28.8943 10.1562C28.8943 9.81487 28.8065 9.51491 28.6308 9.25639C28.4584 8.99455 28.2049 8.78906 27.8701 8.63991C27.5387 8.49077 27.1377 8.41619 26.667 8.41619H25.8069V7.16335H26.667C27.0448 7.16335 27.3763 7.09541 27.6613 6.95952C27.9497 6.82363 28.1751 6.63471 28.3375 6.39276C28.4999 6.14749 28.5811 5.8608 28.5811 5.53267C28.5811 5.2178 28.5098 4.94437 28.3673 4.71236C28.2281 4.47704 28.0292 4.29309 27.7707 4.16051C27.5155 4.02794 27.2139 3.96165 26.8659 3.96165C26.5344 3.96165 26.2245 4.02296 25.9362 4.1456C25.6511 4.26491 25.4191 4.43726 25.2402 4.66264C25.0612 4.88471 24.9651 5.15151 24.9518 5.46307H23.4653C23.4819 4.91288 23.6443 4.42898 23.9525 4.01136C24.2641 3.59375 24.6751 3.26728 25.1855 3.03196C25.6959 2.79664 26.2627 2.67898 26.8858 2.67898C27.5387 2.67898 28.1021 2.80658 28.5761 3.06179C29.0534 3.31368 29.4213 3.65009 29.6798 4.07102C29.9416 4.49195 30.0709 4.95265 30.0676 5.45312C30.0709 6.0232 29.9118 6.5071 29.5903 6.90483C29.2721 7.30256 28.8479 7.56937 28.3176 7.70526V7.7848C28.9937 7.88755 29.5174 8.15601 29.8886 8.5902C30.2631 9.02438 30.4487 9.56297 30.4454 10.206C30.4487 10.7661 30.293 11.2682 29.9781 11.7124C29.6665 12.1565 29.2406 12.5062 28.7004 12.7614C28.1601 13.0133 27.542 13.1392 26.846 13.1392Z"
                                                fill="#F9FFFB" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="shop-btn">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">

                            </button>
                        </div>
                    </div>
                    <div class="header-input">
                        <input type="text" placeholder="Search....">
                        <span>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.9708 16.4151C12.5227 17.4021 10.9758 17.9723 9.27353 18.0062C5.58462 18.0802 2.75802 16.483 1.05056 13.1945C-1.76315 7.77253 1.33485 1.37571 7.25086 0.167548C12.2281 -0.848249 17.2053 2.87895 17.7198 7.98579C17.9182 9.95558 17.5566 11.7939 16.5852 13.5061C16.4512 13.742 16.483 13.8725 16.6651 14.0553C18.2412 15.6386 19.8112 17.2272 21.3735 18.8244C22.1826 19.6513 22.2058 20.7559 21.456 21.4932C20.7697 22.1678 19.7047 22.1747 18.9764 21.4793C18.3623 20.8917 17.7774 20.2737 17.1796 19.6688C16.118 18.5929 15.0564 17.5153 13.9708 16.4151ZM2.89545 9.0364C2.91692 12.4172 5.59664 15.1164 8.91967 15.1042C12.2384 15.092 14.9138 12.3493 14.8889 8.98505C14.864 5.63213 12.1826 2.92508 8.89047 2.92857C5.58204 2.93118 2.87397 5.68958 2.89545 9.0364Z"
                                    fill="black"></path>
                            </svg>
                        </span>
                    </div>

                    <div class="category-dropdown">
                        <ul class="category-list">
                            <li class="category-list-item">
                                <a href="product-sidebar.html">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex">
                                            <span class="dropdown-img">
                                                <img src="./assets/images/homepage-one/category-img/dresses.webp"
                                                    alt="dress">
                                            </span>
                                            <span class="dropdown-text">
                                                Dresses
                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="category-list-item">
                                <a href="product-sidebar.html">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex">
                                            <span class="dropdown-img">
                                                <img src="./assets/images/homepage-one/category-img/bags.webp"
                                                    alt="Bags">
                                            </span>
                                            <span class="dropdown-text">
                                                Bags
                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="category-list-item">
                                <a href="product-sidebar.html">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex">
                                            <span class="dropdown-img">
                                                <img src="./assets/images/homepage-one/category-img/sweaters.webp"
                                                    alt="sweaters">
                                            </span>
                                            <span class="dropdown-text">
                                                Sweaters
                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="category-list-item">
                                <a href="product-sidebar.html">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex">
                                            <span class="dropdown-img">
                                                <img src="./assets/images/homepage-one/category-img/shoes.webp"
                                                    alt="sweaters">
                                            </span>
                                            <span class="dropdown-text">
                                                Boots
                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="category-list-item">
                                <a href="product-sidebar.html">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex">
                                            <span class="dropdown-img">
                                                <img src="./assets/images/homepage-one/category-img/gift.webp"
                                                    alt="gift">
                                            </span>
                                            <span class="dropdown-text">
                                                Gifts
                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="category-list-item">
                                <a href="product-sidebar.html">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex">
                                            <span class="dropdown-img">
                                                <img src="./assets/images/homepage-one/category-img/sneakers.webp"
                                                    alt="sneakers">
                                            </span>
                                            <span class="dropdown-text">
                                                Sneakers
                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="category-list-item">
                                <a href="product-sidebar.html">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex">
                                            <span class="dropdown-img">
                                                <img src="./assets/images/homepage-one/category-img/watch.webp"
                                                    alt="watch">
                                            </span>
                                            <span class="dropdown-text">
                                                Watches
                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="category-list-item">
                                <a href="product-sidebar.html">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex">
                                            <span class="dropdown-img">
                                                <img src="./assets/images/homepage-one/category-img/ring.webp"
                                                    alt="ring">
                                            </span>
                                            <span class="dropdown-text">
                                                Gold Ring
                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="category-list-item">
                                <a href="product-sidebar.html">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex">
                                            <span class="dropdown-img">
                                                <img src="./assets/images/homepage-one/category-img/cap.webp" alt="cap">
                                            </span>
                                            <span class="dropdown-text">
                                                Cap
                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="category-list-item">
                                <a href="product-sidebar.html">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex">
                                            <span class="dropdown-img">
                                                <img src="./assets/images/homepage-one/category-img/glass.webp"
                                                    alt="glass">
                                            </span>
                                            <span class="dropdown-text">
                                                Sunglasses
                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="category-list-item">
                                <a href="product-sidebar.html">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex">
                                            <span class="dropdown-img">
                                                <img src="./assets/images/homepage-one/category-img/baby.webp"
                                                    alt="baby">
                                            </span>
                                            <span class="dropdown-text">
                                                Baby Shop
                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="header-bottom d-lg-block d-none">
            <div class="container">
                <div class="header-nav">
                    <div class="category-menu-section position-relative">
                        <div class="empty position-fixed" onclick="tooglmenu()"></div>
                        <button class="dropdown-btn" onclick="tooglmenu()">
                            <span class="dropdown-icon">
                                <svg width="14" height="9" viewBox="0 0 14 9" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="14" height="1" />
                                    <rect y="8" width="14" height="1" />
                                    <rect y="4" width="10" height="1" />
                                </svg>
                            </span>
                            <span class="list-text">
                                All Categories
                            </span>
                        </button>
                        <div class="category-dropdown position-absolute" id="subMenu">
                            <ul class="category-list">
                                <li class="category-list-item">
                                    <a href="product-sidebar.html">
                                        <div class="dropdown-item">
                                            <div class="dropdown-list-item">
                                                <span class="dropdown-img">
                                                    <img src="./assets/images/homepage-one/category-img/dresses.webp"
                                                        alt="dress">
                                                </span>
                                                <span class="dropdown-text">
                                                    Dresses
                                                </span>
                                            </div>
                                            <div class="drop-down-list-icon">
                                                <span>
                                                    <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                            transform="rotate(45 1.5 0.818359)" fill="#1D1D1D" />
                                                        <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                            transform="rotate(135 5.58984 4.90918)" fill="#1D1D1D" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="category-list-item">
                                    <a href="product-sidebar.html">
                                        <div class="dropdown-item d-flex justify-content-between align-items-center">
                                            <div class="dropdown-list-item d-flex">
                                                <span class="dropdown-img">
                                                    <img src="./assets/images/homepage-one/category-img/bags.webp"
                                                        alt="Bags">
                                                </span>
                                                <span class="dropdown-text">
                                                    Bags
                                                </span>
                                            </div>
                                            <div class="drop-down-list-icon">
                                                <span>
                                                    <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                            transform="rotate(45 1.5 0.818359)" />
                                                        <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                            transform="rotate(135 5.58984 4.90918)" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="category-list-item">
                                    <a href="product-sidebar.html">
                                        <div class="dropdown-item d-flex justify-content-between align-items-center">
                                            <div class="dropdown-list-item d-flex">
                                                <span class="dropdown-img">
                                                    <img src="./assets/images/homepage-one/category-img/sweaters.webp"
                                                        alt="sweaters">
                                                </span>
                                                <span class="dropdown-text">
                                                    Sweaters
                                                </span>
                                            </div>
                                            <div class="drop-down-list-icon">
                                                <span>
                                                    <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                            transform="rotate(45 1.5 0.818359)" />
                                                        <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                            transform="rotate(135 5.58984 4.90918)" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="category-list-item">
                                    <a href="product-sidebar.html">
                                        <div class="dropdown-item d-flex justify-content-between align-items-center">
                                            <div class="dropdown-list-item d-flex">
                                                <span class="dropdown-img">
                                                    <img src="./assets/images/homepage-one/category-img/shoes.webp"
                                                        alt="sweaters">
                                                </span>
                                                <span class="dropdown-text">
                                                    Boots
                                                </span>
                                            </div>
                                            <div class="drop-down-list-icon">
                                                <span>
                                                    <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                            transform="rotate(45 1.5 0.818359)" />
                                                        <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                            transform="rotate(135 5.58984 4.90918)" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="category-list-item">
                                    <a href="product-sidebar.html">
                                        <div class="dropdown-item d-flex justify-content-between align-items-center">
                                            <div class="dropdown-list-item d-flex">
                                                <span class="dropdown-img">
                                                    <img src="./assets/images/homepage-one/category-img/gift.webp"
                                                        alt="gift">
                                                </span>
                                                <span class="dropdown-text">
                                                    Gifts
                                                </span>
                                            </div>
                                            <div class="drop-down-list-icon">
                                                <span>
                                                    <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                            transform="rotate(45 1.5 0.818359)" />
                                                        <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                            transform="rotate(135 5.58984 4.90918)" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="category-list-item">
                                    <a href="product-sidebar.html">
                                        <div class="dropdown-item d-flex justify-content-between align-items-center">
                                            <div class="dropdown-list-item d-flex">
                                                <span class="dropdown-img">
                                                    <img src="./assets/images/homepage-one/category-img/sneakers.webp"
                                                        alt="sneakers">
                                                </span>
                                                <span class="dropdown-text">
                                                    Sneakers
                                                </span>
                                            </div>
                                            <div class="drop-down-list-icon">
                                                <span>
                                                    <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                            transform="rotate(45 1.5 0.818359)" fill="#1D1D1D" />
                                                        <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                            transform="rotate(135 5.58984 4.90918)" fill="#1D1D1D" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="category-list-item">
                                    <a href="product-sidebar.html">
                                        <div class="dropdown-item d-flex justify-content-between align-items-center">
                                            <div class="dropdown-list-item d-flex">
                                                <span class="dropdown-img">
                                                    <img src="./assets/images/homepage-one/category-img/watch.webp"
                                                        alt="watch">
                                                </span>
                                                <span class="dropdown-text">
                                                    Watches
                                                </span>
                                            </div>
                                            <div class="drop-down-list-icon">
                                                <span>
                                                    <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                            transform="rotate(45 1.5 0.818359)" />
                                                        <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                            transform="rotate(135 5.58984 4.90918)" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="category-list-item">
                                    <a href="product-sidebar.html">
                                        <div class="dropdown-item d-flex justify-content-between align-items-center">
                                            <div class="dropdown-list-item d-flex">
                                                <span class="dropdown-img">
                                                    <img src="./assets/images/homepage-one/category-img/ring.webp"
                                                        alt="ring">
                                                </span>
                                                <span class="dropdown-text">
                                                    Gold Ring
                                                </span>
                                            </div>
                                            <div class="drop-down-list-icon">
                                                <span>
                                                    <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                            transform="rotate(45 1.5 0.818359)" />
                                                        <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                            transform="rotate(135 5.58984 4.90918)" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="category-list-item">
                                    <a href="product-sidebar.html">
                                        <div class="dropdown-item d-flex justify-content-between align-items-center">
                                            <div class="dropdown-list-item d-flex">
                                                <span class="dropdown-img">
                                                    <img src="./assets/images/homepage-one/category-img/cap.webp"
                                                        alt="cap">
                                                </span>
                                                <span class="dropdown-text">
                                                    Cap
                                                </span>
                                            </div>
                                            <div class="drop-down-list-icon">
                                                <span>
                                                    <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                            transform="rotate(45 1.5 0.818359)" />
                                                        <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                            transform="rotate(135 5.58984 4.90918)" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="category-list-item">
                                    <a href="product-sidebar.html">
                                        <div class="dropdown-item d-flex justify-content-between align-items-center">
                                            <div class="dropdown-list-item d-flex">
                                                <span class="dropdown-img">
                                                    <img src="./assets/images/homepage-one/category-img/glass.webp"
                                                        alt="glass">
                                                </span>
                                                <span class="dropdown-text">
                                                    Sunglasses
                                                </span>
                                            </div>
                                            <div class="drop-down-list-icon">
                                                <span>
                                                    <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                            transform="rotate(45 1.5 0.818359)" />
                                                        <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                            transform="rotate(135 5.58984 4.90918)" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="category-list-item">
                                    <a href="product-sidebar.html">
                                        <div class="dropdown-item d-flex justify-content-between align-items-center">
                                            <div class="dropdown-list-item d-flex">
                                                <span class="dropdown-img">
                                                    <img src="./assets/images/homepage-one/category-img/baby.webp"
                                                        alt="baby">
                                                </span>
                                                <span class="dropdown-text">
                                                    Baby Shop
                                                </span>
                                            </div>
                                            <div class="drop-down-list-icon">
                                                <span>
                                                    <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                            transform="rotate(45 1.5 0.818359)" />
                                                        <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                            transform="rotate(135 5.58984 4.90918)" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-nav-menu">
                        <ul class="menu-list">
                            <li>
                                <a href="index.html">
                                    <span class="list-text">Home</span>
                                </a>
                            </li>
                            <li class="mega-menu">
                                <a href="product-sidebar.html">
                                    <span class="list-text">Shop</span>
                                    <span>
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1_183)">
                                                <path
                                                    d="M2.37811 5.89491C1.88356 5.89491 1.38862 5.90351 0.894066 5.89218C0.443267 5.88202 0.108098 5.59451 0.0178597 5.17027C-0.0641747 4.7851 0.137786 4.36204 0.508895 4.20305C0.659291 4.13859 0.83586 4.11008 1.00071 4.10851C1.93786 4.09992 2.87539 4.10461 3.81254 4.10422C4.07075 4.10422 4.10357 4.07062 4.10396 3.80889C4.10474 2.85847 4.102 1.90843 4.10513 0.958001C4.10669 0.513061 4.336 0.177111 4.71218 0.0501527C5.30752 -0.151027 5.88567 0.278287 5.89387 0.937687C5.90168 1.56232 5.89582 2.18735 5.89582 2.81237C5.89582 3.14441 5.89504 3.47646 5.89621 3.80811C5.897 4.07023 5.92942 4.10422 6.18685 4.10422C7.13728 4.105 8.08732 4.10265 9.03774 4.10539C9.48503 4.10656 9.81941 4.33235 9.94872 4.70776C10.1534 5.30192 9.72605 5.88437 9.06782 5.89413C8.50803 5.90233 7.94825 5.89608 7.38846 5.89608C6.97829 5.89608 6.56851 5.89491 6.15833 5.89687C5.93918 5.89804 5.897 5.94023 5.8966 6.1625C5.89543 7.11918 5.89778 8.07625 5.89543 9.03293C5.89426 9.48216 5.67238 9.81577 5.29736 9.94741C4.70437 10.1552 4.11841 9.72983 4.10669 9.07316C4.09771 8.57861 4.10474 8.08367 4.10474 7.58912C4.10474 7.12035 4.10552 6.65197 4.10435 6.1832C4.10396 5.93398 4.06841 5.89726 3.82387 5.89687C3.34221 5.89569 2.86055 5.89647 2.37889 5.89647C2.37811 5.8953 2.37811 5.8953 2.37811 5.89491Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1_185">
                                                    <rect width="10" height="10" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                </a>
                                <div class="shop-menu">
                                    <div class="menu-wrapper">
                                        <div class="menu-list">
                                            <h5 class="menu-title">Dresses</h5>
                                            <ul>
                                                <li><a href="product-sidebar.html">Shirt</a></li>
                                                <li><a href="product-sidebar.html">Skart</a></li>
                                                <li><a href="product-sidebar.html"> T-Shirt</a></li>
                                            </ul>
                                        </div>
                                        <div class="menu-list">
                                            <h5 class="menu-title">Bags</h5>
                                            <ul>
                                                <li><a href="product-sidebar.html">HandBags</a></li>
                                                <li><a href="product-sidebar.html">Mobile Bags</a></li>
                                                <li><a href="product-sidebar.html">School Bags</a></li>
                                            </ul>
                                        </div>
                                        <div class="menu-list">
                                            <h5 class="menu-title">Cosmetics</h5>
                                            <ul>
                                                <li><a href="product-sidebar.html">Liptics</a></li>
                                                <li><a href="product-sidebar.html">Foundation</a></li>
                                                <li><a href="product-sidebar.html"> Eye Liner</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="shop-menu-img">
                                        <img src="./assets/images/homepage-one/empty-wishlist.webp" alt="img">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="list-text">Pages</span>
                                    <span>
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1_183)">
                                                <path
                                                    d="M2.37811 5.89491C1.88356 5.89491 1.38862 5.90351 0.894066 5.89218C0.443267 5.88202 0.108098 5.59451 0.0178597 5.17027C-0.0641747 4.7851 0.137786 4.36204 0.508895 4.20305C0.659291 4.13859 0.83586 4.11008 1.00071 4.10851C1.93786 4.09992 2.87539 4.10461 3.81254 4.10422C4.07075 4.10422 4.10357 4.07062 4.10396 3.80889C4.10474 2.85847 4.102 1.90843 4.10513 0.958001C4.10669 0.513061 4.336 0.177111 4.71218 0.0501527C5.30752 -0.151027 5.88567 0.278287 5.89387 0.937687C5.90168 1.56232 5.89582 2.18735 5.89582 2.81237C5.89582 3.14441 5.89504 3.47646 5.89621 3.80811C5.897 4.07023 5.92942 4.10422 6.18685 4.10422C7.13728 4.105 8.08732 4.10265 9.03774 4.10539C9.48503 4.10656 9.81941 4.33235 9.94872 4.70776C10.1534 5.30192 9.72605 5.88437 9.06782 5.89413C8.50803 5.90233 7.94825 5.89608 7.38846 5.89608C6.97829 5.89608 6.56851 5.89491 6.15833 5.89687C5.93918 5.89804 5.897 5.94023 5.8966 6.1625C5.89543 7.11918 5.89778 8.07625 5.89543 9.03293C5.89426 9.48216 5.67238 9.81577 5.29736 9.94741C4.70437 10.1552 4.11841 9.72983 4.10669 9.07316C4.09771 8.57861 4.10474 8.08367 4.10474 7.58912C4.10474 7.12035 4.10552 6.65197 4.10435 6.1832C4.10396 5.93398 4.06841 5.89726 3.82387 5.89687C3.34221 5.89569 2.86055 5.89647 2.37889 5.89647C2.37811 5.8953 2.37811 5.8953 2.37811 5.89491Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1_18">
                                                    <rect width="10" height="10" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                </a>
                                <ul class="header-sub-menu">
                                    <li><a href="product-info.html">Product-details</a></li>
                                    <li><a href="privacy.html">Privacy Policy</a></li>
                                    <li><a href="terms.html">Terms & Condition</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="product-sidebar.html">Shop Category Icon</a></li>
                                    <li><a href="product-sidebar.html">Shop List View</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="about.html">
                                    <span class="list-text">About</span>
                                </a>
                            </li>
                            <li>
                                <a href="blogs.html">
                                    <span class="list-text">Blog</span>
                                </a>
                                <ul class="header-sub-menu">
                                    <li><a href="blogs-details.html">Blog-details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="user-profile.html">
                                    <span class="list-text">User Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="contact-us.html">
                                    <span class="list-text">Contact</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-vendor-btn">
                        <a href="become-vendor.html" class="shop-btn">
                            <span class="list-text shop-text">Became Vendor</span>
                            <span class="icon">
                                <svg width="24" height="16" viewBox="0 0 24 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.257 7.07205C20.038 7.07205 19.8474 7.07205 19.6563 7.07205C17.4825 7.07205 15.3086 7.07205 13.1352 7.07205C10.1545 7.07205 7.17336 7.0725 4.19265 7.0725C3.30392 7.0725 2.41519 7.07024 1.52646 7.07295C1.12124 7.07431 0.809811 7.25265 0.625785 7.62651C0.43866 8.00623 0.488204 8.37556 0.737704 8.70426C0.932347 8.96027 1.20529 9.08173 1.52867 9.08037C2.20948 9.07766 2.8903 9.07902 3.57111 9.07902C5.95285 9.07902 8.33415 9.07902 10.7159 9.07902C13.782 9.07902 16.8485 9.07902 19.9146 9.07902C20.0274 9.07902 20.1398 9.07902 20.2822 9.07902C20.1871 9.18332 20.1141 9.26865 20.0358 9.34857C19.5656 9.82672 19.0922 10.3022 18.6229 10.7812C18.1363 11.2779 17.6541 11.7791 17.1675 12.2757C16.4942 12.9634 15.8116 13.6415 15.1476 14.3391C14.9096 14.5893 14.8455 14.9157 14.9406 15.2575C15.156 16.0305 16.0567 16.2499 16.6119 15.6769C17.4342 14.8286 18.2655 13.9892 19.0927 13.1458C19.6948 12.5317 20.2968 11.9172 20.8985 11.3023C21.5952 10.5902 22.2911 9.87729 22.9878 9.1648C23.1059 9.04425 23.2249 8.9246 23.3435 8.8045C23.6903 8.45367 23.7239 7.84278 23.3943 7.4766C22.998 7.03683 22.5852 6.61241 22.1756 6.18573C21.7965 5.79066 21.4134 5.39965 21.0303 5.00909C20.6733 4.64473 20.3132 4.28306 19.9553 3.91915C19.6147 3.57284 19.2754 3.22563 18.9356 2.87887C18.5154 2.44948 18.0951 2.01964 17.6744 1.5907C17.2511 1.15861 16.8198 0.734188 16.4057 0.29261C16.0363 -0.101559 15.3697 -0.0816927 15.0344 0.257392C14.6238 0.672782 14.5999 1.26381 14.995 1.68552C15.3378 2.0517 15.6957 2.40342 16.0465 2.76192C16.929 3.66449 17.8111 4.56797 18.6937 5.47054C19.1829 5.97081 19.6735 6.47018 20.1632 6.97046C20.1885 6.99574 20.2123 7.02329 20.257 7.07205Z" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--------------- header-section-end --------------->

    <!--------------- category-section--------------->
    <section class="product-category mt-5">
        <div class="container">
            <div class="section-title">
                <h5>Our Categories</h5>
                <a href="product-sidebar.html" class="view">View All</a>
            </div>
            <div class="category-section">
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="100">
                    <div class="wrapper-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQa9-OSYXbL_LbdkXDfkID0FO--3YBf68oJmw&usqp=CAU" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Netflix</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="200">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/bags.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Leather Bags</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="300">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/sweaters.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Sweaters</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="400">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/shoes.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Boots</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="500">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/gift.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Gift for Him</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="600">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/sneakers.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Sneakers</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="100">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/watch.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Watch</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="200">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/ring.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Gold Rings</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="300">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/cap.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Cap</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="400">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/glass.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Sunglass</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="500">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/baby.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Baby Shop</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="200">
                    <div class="wrapper-img">
                        <img src="./assets/images/homepage-one/category-img/bags.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar.html" class="wrapper-details">Leather Bags</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- category-section-end--------------->

    <!--------------- brand-section--------------->
    <section class="product brand" data-aos="fade-up">
        <div class="container">
            <div class="section-title">
                <h5>Brand of Prodcuts</h5>
                <a href="product-sidebar.html" class="view">View All</a>
            </div>
            <div class="brand-section">
                <div class="product-wrapper">
                    <div class="wrapper-img">
                        <a href="product-sidebar.html">
                            <img src="./assets/images/homepage-one/brand-img-1.webp" alt="img">
                        </a>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="wrapper-img">
                        <a href="product-sidebar.html">
                            <img src="./assets/images/homepage-one/brand-img-2.webp" alt="img">
                        </a>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="wrapper-img">
                        <a href="product-sidebar.html">
                            <img src="./assets/images/homepage-one/brand-img-3.webp" alt="img">
                        </a>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="wrapper-img">
                        <a href="product-sidebar.html">
                            <img src="./assets/images/homepage-one/brand-img-4.webp" alt="img">
                        </a>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="wrapper-img">
                        <a href="product-sidebar.html">
                            <img src="./assets/images/homepage-one/brand-img-5.webp" alt="img">
                        </a>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="wrapper-img">
                        <a href="product-sidebar.html">
                            <img src="./assets/images/homepage-one/brand-img-6.webp" alt="img">
                        </a>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="wrapper-img">
                        <a href="product-sidebar.html">
                            <img src="./assets/images/homepage-one/brand-img-7.webp" alt="img">
                        </a>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="wrapper-img">
                        <a href="product-sidebar.html">
                            <img src="./assets/images/homepage-one/brand-img-8.webp" alt="img">
                        </a>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="wrapper-img">
                        <a href="product-sidebar.html">
                            <img src="./assets/images/homepage-one/brand-img-9.webp" alt="img">
                        </a>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="wrapper-img">
                        <a href="product-sidebar.html">
                            <img src="./assets/images/homepage-one/brand-img-10.webp" alt="img">
                        </a>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="wrapper-img">
                        <a href="product-sidebar.html">
                            <img src="./assets/images/homepage-one/brand-img-11.webp" alt="img">
                        </a>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="wrapper-img">
                        <a href="product-sidebar.html">
                            <img src="./assets/images/homepage-one/brand-img-12.webp" alt="img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- brand-section-end--------------->

    <!--------------- arrival-section--------------->
    <section class="product arrival">
        <div class="container">
            <div class="section-title">
                <h5>NEW ARRIVALS</h5>
                <a href="product-sidebar.html" class="view">View All</a>
            </div>
            <div class="arrival-section">
                <div class="row g-5">
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQa9-OSYXbL_LbdkXDfkID0FO--3YBf68oJmw&usqp=CAU"
                                    alt="product-img">
                                <div class="product-cart-items">
                                    <a href="#" class="cart cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="wishlist.html" class="favourite cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="#AE1C9A" />
                                                <path
                                                    d="M14.6928 12.3935C13.5057 12.54 12.512 13.0197 11.671 13.8546C10.9155 14.6016 10.4615 15.3926 10.201 16.4216C9.73957 18.2049 10.0745 19.9626 11.1835 21.6141C11.8943 22.6723 12.8135 23.6427 14.4993 25.1221C15.571 26.0632 18.8422 28.8096 19.0022 28.9011C19.1511 28.989 19.2069 29 19.5232 29C19.8395 29 19.8953 28.989 20.0442 28.9011C20.2042 28.8096 23.4828 26.0595 24.5471 25.1221C26.2404 23.6354 27.1521 22.6687 27.8629 21.6141C28.9719 19.9626 29.3068 18.2049 28.8454 16.4216C28.5849 15.3926 28.1309 14.6016 27.3754 13.8546C26.6237 13.1113 25.8199 12.6828 24.7667 12.4631C24.2383 12.3533 23.2632 12.3423 22.8018 12.4448C21.5142 12.7194 20.528 13.3529 19.6274 14.4808L19.5232 14.609L19.4227 14.4808C18.5333 13.3749 17.562 12.7414 16.3228 12.4631C15.9544 12.3789 15.1059 12.3423 14.6928 12.3935ZM15.9357 13.5104C16.9926 13.6935 17.9044 14.294 18.6263 15.2864C18.7491 15.4585 18.9017 15.6636 18.9613 15.7478C19.2367 16.1286 19.8098 16.1286 20.0851 15.7478C20.1447 15.6636 20.2973 15.4585 20.4201 15.2864C21.4062 13.9315 22.7795 13.2944 24.2755 13.4958C25.9352 13.7191 27.2303 14.8616 27.7252 16.5424C28.116 17.8717 27.9448 19.2668 27.234 20.5228C26.6386 21.5738 25.645 22.676 23.9145 24.203C23.0772 24.939 19.5567 27.9198 19.5232 27.9198C19.486 27.9198 15.9804 24.95 15.1319 24.203C12.4711 21.8557 11.4217 20.391 11.1686 18.6736C11.0049 17.5641 11.2393 16.3703 11.8087 15.4292C12.6646 14.0121 14.3318 13.2358 15.9357 13.5104Z"
                                                    fill="#000" />
                                            </svg>

                                        </span>
                                    </a>
                                    <a href="compaire.html" class="compaire cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Netflix Gift Card</a>
                                    <div class="price">
                                        <span class="price-cut">$12.99</span>
                                        <span class="new-price">$6.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart.html" class="product-btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="https://jamfield.com/wp-content/uploads/2021/12/Kaspersky-Antivirus-1-User.jpg"
                                    alt="product-img">
                                <div class="product-cart-items">
                                    <a href="#" class="cart cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="wishlist.html" class="favourite cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="#AE1C9A" />
                                                <path
                                                    d="M14.6928 12.3935C13.5057 12.54 12.512 13.0197 11.671 13.8546C10.9155 14.6016 10.4615 15.3926 10.201 16.4216C9.73957 18.2049 10.0745 19.9626 11.1835 21.6141C11.8943 22.6723 12.8135 23.6427 14.4993 25.1221C15.571 26.0632 18.8422 28.8096 19.0022 28.9011C19.1511 28.989 19.2069 29 19.5232 29C19.8395 29 19.8953 28.989 20.0442 28.9011C20.2042 28.8096 23.4828 26.0595 24.5471 25.1221C26.2404 23.6354 27.1521 22.6687 27.8629 21.6141C28.9719 19.9626 29.3068 18.2049 28.8454 16.4216C28.5849 15.3926 28.1309 14.6016 27.3754 13.8546C26.6237 13.1113 25.8199 12.6828 24.7667 12.4631C24.2383 12.3533 23.2632 12.3423 22.8018 12.4448C21.5142 12.7194 20.528 13.3529 19.6274 14.4808L19.5232 14.609L19.4227 14.4808C18.5333 13.3749 17.562 12.7414 16.3228 12.4631C15.9544 12.3789 15.1059 12.3423 14.6928 12.3935ZM15.9357 13.5104C16.9926 13.6935 17.9044 14.294 18.6263 15.2864C18.7491 15.4585 18.9017 15.6636 18.9613 15.7478C19.2367 16.1286 19.8098 16.1286 20.0851 15.7478C20.1447 15.6636 20.2973 15.4585 20.4201 15.2864C21.4062 13.9315 22.7795 13.2944 24.2755 13.4958C25.9352 13.7191 27.2303 14.8616 27.7252 16.5424C28.116 17.8717 27.9448 19.2668 27.234 20.5228C26.6386 21.5738 25.645 22.676 23.9145 24.203C23.0772 24.939 19.5567 27.9198 19.5232 27.9198C19.486 27.9198 15.9804 24.95 15.1319 24.203C12.4711 21.8557 11.4217 20.391 11.1686 18.6736C11.0049 17.5641 11.2393 16.3703 11.8087 15.4292C12.6646 14.0121 14.3318 13.2358 15.9357 13.5104Z"
                                                    fill="#000" />
                                            </svg>

                                        </span>
                                    </a>
                                    <a href="compaire.html" class="compaire cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Feminine Wrap Blouse
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$9.99</span>
                                        <span class="new-price">$6.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart.html" class="product-btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-3.webp"
                                    alt="product-img">
                                <div class="product-cart-items">
                                    <a href="#" class="cart cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="wishlist.html" class="favourite cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="#AE1C9A" />
                                                <path
                                                    d="M14.6928 12.3935C13.5057 12.54 12.512 13.0197 11.671 13.8546C10.9155 14.6016 10.4615 15.3926 10.201 16.4216C9.73957 18.2049 10.0745 19.9626 11.1835 21.6141C11.8943 22.6723 12.8135 23.6427 14.4993 25.1221C15.571 26.0632 18.8422 28.8096 19.0022 28.9011C19.1511 28.989 19.2069 29 19.5232 29C19.8395 29 19.8953 28.989 20.0442 28.9011C20.2042 28.8096 23.4828 26.0595 24.5471 25.1221C26.2404 23.6354 27.1521 22.6687 27.8629 21.6141C28.9719 19.9626 29.3068 18.2049 28.8454 16.4216C28.5849 15.3926 28.1309 14.6016 27.3754 13.8546C26.6237 13.1113 25.8199 12.6828 24.7667 12.4631C24.2383 12.3533 23.2632 12.3423 22.8018 12.4448C21.5142 12.7194 20.528 13.3529 19.6274 14.4808L19.5232 14.609L19.4227 14.4808C18.5333 13.3749 17.562 12.7414 16.3228 12.4631C15.9544 12.3789 15.1059 12.3423 14.6928 12.3935ZM15.9357 13.5104C16.9926 13.6935 17.9044 14.294 18.6263 15.2864C18.7491 15.4585 18.9017 15.6636 18.9613 15.7478C19.2367 16.1286 19.8098 16.1286 20.0851 15.7478C20.1447 15.6636 20.2973 15.4585 20.4201 15.2864C21.4062 13.9315 22.7795 13.2944 24.2755 13.4958C25.9352 13.7191 27.2303 14.8616 27.7252 16.5424C28.116 17.8717 27.9448 19.2668 27.234 20.5228C26.6386 21.5738 25.645 22.676 23.9145 24.203C23.0772 24.939 19.5567 27.9198 19.5232 27.9198C19.486 27.9198 15.9804 24.95 15.1319 24.203C12.4711 21.8557 11.4217 20.391 11.1686 18.6736C11.0049 17.5641 11.2393 16.3703 11.8087 15.4292C12.6646 14.0121 14.3318 13.2358 15.9357 13.5104Z"
                                                    fill="#000" />
                                            </svg>

                                        </span>
                                    </a>
                                    <a href="compaire.html" class="compaire cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Trendy Bucket Hat
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$18.99</span>
                                        <span class="new-price">$10.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart.html" class="product-btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-4.webp"
                                    alt="product-img">
                                <div class="product-cart-items">
                                    <a href="#" class="cart cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="wishlist.html" class="favourite cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="#AE1C9A" />
                                                <path
                                                    d="M14.6928 12.3935C13.5057 12.54 12.512 13.0197 11.671 13.8546C10.9155 14.6016 10.4615 15.3926 10.201 16.4216C9.73957 18.2049 10.0745 19.9626 11.1835 21.6141C11.8943 22.6723 12.8135 23.6427 14.4993 25.1221C15.571 26.0632 18.8422 28.8096 19.0022 28.9011C19.1511 28.989 19.2069 29 19.5232 29C19.8395 29 19.8953 28.989 20.0442 28.9011C20.2042 28.8096 23.4828 26.0595 24.5471 25.1221C26.2404 23.6354 27.1521 22.6687 27.8629 21.6141C28.9719 19.9626 29.3068 18.2049 28.8454 16.4216C28.5849 15.3926 28.1309 14.6016 27.3754 13.8546C26.6237 13.1113 25.8199 12.6828 24.7667 12.4631C24.2383 12.3533 23.2632 12.3423 22.8018 12.4448C21.5142 12.7194 20.528 13.3529 19.6274 14.4808L19.5232 14.609L19.4227 14.4808C18.5333 13.3749 17.562 12.7414 16.3228 12.4631C15.9544 12.3789 15.1059 12.3423 14.6928 12.3935ZM15.9357 13.5104C16.9926 13.6935 17.9044 14.294 18.6263 15.2864C18.7491 15.4585 18.9017 15.6636 18.9613 15.7478C19.2367 16.1286 19.8098 16.1286 20.0851 15.7478C20.1447 15.6636 20.2973 15.4585 20.4201 15.2864C21.4062 13.9315 22.7795 13.2944 24.2755 13.4958C25.9352 13.7191 27.2303 14.8616 27.7252 16.5424C28.116 17.8717 27.9448 19.2668 27.234 20.5228C26.6386 21.5738 25.645 22.676 23.9145 24.203C23.0772 24.939 19.5567 27.9198 19.5232 27.9198C19.486 27.9198 15.9804 24.95 15.1319 24.203C12.4711 21.8557 11.4217 20.391 11.1686 18.6736C11.0049 17.5641 11.2393 16.3703 11.8087 15.4292C12.6646 14.0121 14.3318 13.2358 15.9357 13.5104Z"
                                                    fill="#000" />
                                            </svg>

                                        </span>
                                    </a>
                                    <a href="compaire.html" class="compaire cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Boho Maxi Dress
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$20.99</span>
                                        <span class="new-price">$10.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart.html" class="product-btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-5.webp"
                                    alt="product-img">
                                <div class="product-cart-items">
                                    <a href="#" class="cart cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="wishlist.html" class="favourite cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="#AE1C9A" />
                                                <path
                                                    d="M14.6928 12.3935C13.5057 12.54 12.512 13.0197 11.671 13.8546C10.9155 14.6016 10.4615 15.3926 10.201 16.4216C9.73957 18.2049 10.0745 19.9626 11.1835 21.6141C11.8943 22.6723 12.8135 23.6427 14.4993 25.1221C15.571 26.0632 18.8422 28.8096 19.0022 28.9011C19.1511 28.989 19.2069 29 19.5232 29C19.8395 29 19.8953 28.989 20.0442 28.9011C20.2042 28.8096 23.4828 26.0595 24.5471 25.1221C26.2404 23.6354 27.1521 22.6687 27.8629 21.6141C28.9719 19.9626 29.3068 18.2049 28.8454 16.4216C28.5849 15.3926 28.1309 14.6016 27.3754 13.8546C26.6237 13.1113 25.8199 12.6828 24.7667 12.4631C24.2383 12.3533 23.2632 12.3423 22.8018 12.4448C21.5142 12.7194 20.528 13.3529 19.6274 14.4808L19.5232 14.609L19.4227 14.4808C18.5333 13.3749 17.562 12.7414 16.3228 12.4631C15.9544 12.3789 15.1059 12.3423 14.6928 12.3935ZM15.9357 13.5104C16.9926 13.6935 17.9044 14.294 18.6263 15.2864C18.7491 15.4585 18.9017 15.6636 18.9613 15.7478C19.2367 16.1286 19.8098 16.1286 20.0851 15.7478C20.1447 15.6636 20.2973 15.4585 20.4201 15.2864C21.4062 13.9315 22.7795 13.2944 24.2755 13.4958C25.9352 13.7191 27.2303 14.8616 27.7252 16.5424C28.116 17.8717 27.9448 19.2668 27.234 20.5228C26.6386 21.5738 25.645 22.676 23.9145 24.203C23.0772 24.939 19.5567 27.9198 19.5232 27.9198C19.486 27.9198 15.9804 24.95 15.1319 24.203C12.4711 21.8557 11.4217 20.391 11.1686 18.6736C11.0049 17.5641 11.2393 16.3703 11.8087 15.4292C12.6646 14.0121 14.3318 13.2358 15.9357 13.5104Z"
                                                    fill="#000" />
                                            </svg>

                                        </span>
                                    </a>
                                    <a href="compaire.html" class="compaire cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Casual Denim Jacket
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$20.99</span>
                                        <span class="new-price">$10.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart.html" class="product-btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-6.webp"
                                    alt="product-img">
                                <div class="product-cart-items">
                                    <a href="#" class="cart cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="wishlist.html" class="favourite cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="#AE1C9A" />
                                                <path
                                                    d="M14.6928 12.3935C13.5057 12.54 12.512 13.0197 11.671 13.8546C10.9155 14.6016 10.4615 15.3926 10.201 16.4216C9.73957 18.2049 10.0745 19.9626 11.1835 21.6141C11.8943 22.6723 12.8135 23.6427 14.4993 25.1221C15.571 26.0632 18.8422 28.8096 19.0022 28.9011C19.1511 28.989 19.2069 29 19.5232 29C19.8395 29 19.8953 28.989 20.0442 28.9011C20.2042 28.8096 23.4828 26.0595 24.5471 25.1221C26.2404 23.6354 27.1521 22.6687 27.8629 21.6141C28.9719 19.9626 29.3068 18.2049 28.8454 16.4216C28.5849 15.3926 28.1309 14.6016 27.3754 13.8546C26.6237 13.1113 25.8199 12.6828 24.7667 12.4631C24.2383 12.3533 23.2632 12.3423 22.8018 12.4448C21.5142 12.7194 20.528 13.3529 19.6274 14.4808L19.5232 14.609L19.4227 14.4808C18.5333 13.3749 17.562 12.7414 16.3228 12.4631C15.9544 12.3789 15.1059 12.3423 14.6928 12.3935ZM15.9357 13.5104C16.9926 13.6935 17.9044 14.294 18.6263 15.2864C18.7491 15.4585 18.9017 15.6636 18.9613 15.7478C19.2367 16.1286 19.8098 16.1286 20.0851 15.7478C20.1447 15.6636 20.2973 15.4585 20.4201 15.2864C21.4062 13.9315 22.7795 13.2944 24.2755 13.4958C25.9352 13.7191 27.2303 14.8616 27.7252 16.5424C28.116 17.8717 27.9448 19.2668 27.234 20.5228C26.6386 21.5738 25.645 22.676 23.9145 24.203C23.0772 24.939 19.5567 27.9198 19.5232 27.9198C19.486 27.9198 15.9804 24.95 15.1319 24.203C12.4711 21.8557 11.4217 20.391 11.1686 18.6736C11.0049 17.5641 11.2393 16.3703 11.8087 15.4292C12.6646 14.0121 14.3318 13.2358 15.9357 13.5104Z"
                                                    fill="#000" />
                                            </svg>

                                        </span>
                                    </a>
                                    <a href="compaire.html" class="compaire cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Stylish Statement Earrings
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$20.99</span>
                                        <span class="new-price">$9.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart.html" class="product-btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-7.webp"
                                    alt="product-img">
                                <div class="product-cart-items">
                                    <a href="#" class="cart cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="wishlist.html" class="favourite cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="#AE1C9A" />
                                                <path
                                                    d="M14.6928 12.3935C13.5057 12.54 12.512 13.0197 11.671 13.8546C10.9155 14.6016 10.4615 15.3926 10.201 16.4216C9.73957 18.2049 10.0745 19.9626 11.1835 21.6141C11.8943 22.6723 12.8135 23.6427 14.4993 25.1221C15.571 26.0632 18.8422 28.8096 19.0022 28.9011C19.1511 28.989 19.2069 29 19.5232 29C19.8395 29 19.8953 28.989 20.0442 28.9011C20.2042 28.8096 23.4828 26.0595 24.5471 25.1221C26.2404 23.6354 27.1521 22.6687 27.8629 21.6141C28.9719 19.9626 29.3068 18.2049 28.8454 16.4216C28.5849 15.3926 28.1309 14.6016 27.3754 13.8546C26.6237 13.1113 25.8199 12.6828 24.7667 12.4631C24.2383 12.3533 23.2632 12.3423 22.8018 12.4448C21.5142 12.7194 20.528 13.3529 19.6274 14.4808L19.5232 14.609L19.4227 14.4808C18.5333 13.3749 17.562 12.7414 16.3228 12.4631C15.9544 12.3789 15.1059 12.3423 14.6928 12.3935ZM15.9357 13.5104C16.9926 13.6935 17.9044 14.294 18.6263 15.2864C18.7491 15.4585 18.9017 15.6636 18.9613 15.7478C19.2367 16.1286 19.8098 16.1286 20.0851 15.7478C20.1447 15.6636 20.2973 15.4585 20.4201 15.2864C21.4062 13.9315 22.7795 13.2944 24.2755 13.4958C25.9352 13.7191 27.2303 14.8616 27.7252 16.5424C28.116 17.8717 27.9448 19.2668 27.234 20.5228C26.6386 21.5738 25.645 22.676 23.9145 24.203C23.0772 24.939 19.5567 27.9198 19.5232 27.9198C19.486 27.9198 15.9804 24.95 15.1319 24.203C12.4711 21.8557 11.4217 20.391 11.1686 18.6736C11.0049 17.5641 11.2393 16.3703 11.8087 15.4292C12.6646 14.0121 14.3318 13.2358 15.9357 13.5104Z"
                                                    fill="#000" />
                                            </svg>

                                        </span>
                                    </a>
                                    <a href="compaire.html" class="compaire cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Leather Dress Shoes
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$19.99</span>
                                        <span class="new-price">$18.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart.html" class="product-btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-8.webp"
                                    alt="product-img">
                                <div class="product-cart-items">
                                    <a href="#" class="cart cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="wishlist.html" class="favourite cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="#AE1C9A" />
                                                <path
                                                    d="M14.6928 12.3935C13.5057 12.54 12.512 13.0197 11.671 13.8546C10.9155 14.6016 10.4615 15.3926 10.201 16.4216C9.73957 18.2049 10.0745 19.9626 11.1835 21.6141C11.8943 22.6723 12.8135 23.6427 14.4993 25.1221C15.571 26.0632 18.8422 28.8096 19.0022 28.9011C19.1511 28.989 19.2069 29 19.5232 29C19.8395 29 19.8953 28.989 20.0442 28.9011C20.2042 28.8096 23.4828 26.0595 24.5471 25.1221C26.2404 23.6354 27.1521 22.6687 27.8629 21.6141C28.9719 19.9626 29.3068 18.2049 28.8454 16.4216C28.5849 15.3926 28.1309 14.6016 27.3754 13.8546C26.6237 13.1113 25.8199 12.6828 24.7667 12.4631C24.2383 12.3533 23.2632 12.3423 22.8018 12.4448C21.5142 12.7194 20.528 13.3529 19.6274 14.4808L19.5232 14.609L19.4227 14.4808C18.5333 13.3749 17.562 12.7414 16.3228 12.4631C15.9544 12.3789 15.1059 12.3423 14.6928 12.3935ZM15.9357 13.5104C16.9926 13.6935 17.9044 14.294 18.6263 15.2864C18.7491 15.4585 18.9017 15.6636 18.9613 15.7478C19.2367 16.1286 19.8098 16.1286 20.0851 15.7478C20.1447 15.6636 20.2973 15.4585 20.4201 15.2864C21.4062 13.9315 22.7795 13.2944 24.2755 13.4958C25.9352 13.7191 27.2303 14.8616 27.7252 16.5424C28.116 17.8717 27.9448 19.2668 27.234 20.5228C26.6386 21.5738 25.645 22.676 23.9145 24.203C23.0772 24.939 19.5567 27.9198 19.5232 27.9198C19.486 27.9198 15.9804 24.95 15.1319 24.203C12.4711 21.8557 11.4217 20.391 11.1686 18.6736C11.0049 17.5641 11.2393 16.3703 11.8087 15.4292C12.6646 14.0121 14.3318 13.2358 15.9357 13.5104Z"
                                                    fill="#000" />
                                            </svg>

                                        </span>
                                    </a>
                                    <a href="compaire.html" class="compaire cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Wool Peacoat
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$25.99</span>
                                        <span class="new-price">$13.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart.html" class="product-btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- arrival-section-end--------------->


    <!--------------- top-sell-section--------------->
    <section class="product top-selling">
        <div class="container">
            <div class="section-title">
                <h5>Top Selling Prodcuts</h5>
                <a href="product-sidebar.html" class="view">View All</a>
            </div>
            <div class="top-selling-section">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="product-wrapper" data-aos="fade-right">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-5.webp"
                                    alt="product-img">
                                <div class="product-cart-items">
                                    <a href="#" class="cart cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="wishlist.html" class="favourite cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="#AE1C9A" />
                                                <path
                                                    d="M14.6928 12.3935C13.5057 12.54 12.512 13.0197 11.671 13.8546C10.9155 14.6016 10.4615 15.3926 10.201 16.4216C9.73957 18.2049 10.0745 19.9626 11.1835 21.6141C11.8943 22.6723 12.8135 23.6427 14.4993 25.1221C15.571 26.0632 18.8422 28.8096 19.0022 28.9011C19.1511 28.989 19.2069 29 19.5232 29C19.8395 29 19.8953 28.989 20.0442 28.9011C20.2042 28.8096 23.4828 26.0595 24.5471 25.1221C26.2404 23.6354 27.1521 22.6687 27.8629 21.6141C28.9719 19.9626 29.3068 18.2049 28.8454 16.4216C28.5849 15.3926 28.1309 14.6016 27.3754 13.8546C26.6237 13.1113 25.8199 12.6828 24.7667 12.4631C24.2383 12.3533 23.2632 12.3423 22.8018 12.4448C21.5142 12.7194 20.528 13.3529 19.6274 14.4808L19.5232 14.609L19.4227 14.4808C18.5333 13.3749 17.562 12.7414 16.3228 12.4631C15.9544 12.3789 15.1059 12.3423 14.6928 12.3935ZM15.9357 13.5104C16.9926 13.6935 17.9044 14.294 18.6263 15.2864C18.7491 15.4585 18.9017 15.6636 18.9613 15.7478C19.2367 16.1286 19.8098 16.1286 20.0851 15.7478C20.1447 15.6636 20.2973 15.4585 20.4201 15.2864C21.4062 13.9315 22.7795 13.2944 24.2755 13.4958C25.9352 13.7191 27.2303 14.8616 27.7252 16.5424C28.116 17.8717 27.9448 19.2668 27.234 20.5228C26.6386 21.5738 25.645 22.676 23.9145 24.203C23.0772 24.939 19.5567 27.9198 19.5232 27.9198C19.486 27.9198 15.9804 24.95 15.1319 24.203C12.4711 21.8557 11.4217 20.391 11.1686 18.6736C11.0049 17.5641 11.2393 16.3703 11.8087 15.4292C12.6646 14.0121 14.3318 13.2358 15.9357 13.5104Z"
                                                    fill="#000" />
                                            </svg>

                                        </span>
                                    </a>
                                    <a href="compaire.html" class="compaire cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Leather Dress Shoes
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$19.99</span>
                                        <span class="new-price">$13.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart.html" class="product-btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product-wrapper" data-aos="fade-right">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-3.webp"
                                    alt="product-img">
                                <div class="product-cart-items">
                                    <a href="#" class="cart cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="wishlist.html" class="favourite cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="#AE1C9A" />
                                                <path
                                                    d="M14.6928 12.3935C13.5057 12.54 12.512 13.0197 11.671 13.8546C10.9155 14.6016 10.4615 15.3926 10.201 16.4216C9.73957 18.2049 10.0745 19.9626 11.1835 21.6141C11.8943 22.6723 12.8135 23.6427 14.4993 25.1221C15.571 26.0632 18.8422 28.8096 19.0022 28.9011C19.1511 28.989 19.2069 29 19.5232 29C19.8395 29 19.8953 28.989 20.0442 28.9011C20.2042 28.8096 23.4828 26.0595 24.5471 25.1221C26.2404 23.6354 27.1521 22.6687 27.8629 21.6141C28.9719 19.9626 29.3068 18.2049 28.8454 16.4216C28.5849 15.3926 28.1309 14.6016 27.3754 13.8546C26.6237 13.1113 25.8199 12.6828 24.7667 12.4631C24.2383 12.3533 23.2632 12.3423 22.8018 12.4448C21.5142 12.7194 20.528 13.3529 19.6274 14.4808L19.5232 14.609L19.4227 14.4808C18.5333 13.3749 17.562 12.7414 16.3228 12.4631C15.9544 12.3789 15.1059 12.3423 14.6928 12.3935ZM15.9357 13.5104C16.9926 13.6935 17.9044 14.294 18.6263 15.2864C18.7491 15.4585 18.9017 15.6636 18.9613 15.7478C19.2367 16.1286 19.8098 16.1286 20.0851 15.7478C20.1447 15.6636 20.2973 15.4585 20.4201 15.2864C21.4062 13.9315 22.7795 13.2944 24.2755 13.4958C25.9352 13.7191 27.2303 14.8616 27.7252 16.5424C28.116 17.8717 27.9448 19.2668 27.234 20.5228C26.6386 21.5738 25.645 22.676 23.9145 24.203C23.0772 24.939 19.5567 27.9198 19.5232 27.9198C19.486 27.9198 15.9804 24.95 15.1319 24.203C12.4711 21.8557 11.4217 20.391 11.1686 18.6736C11.0049 17.5641 11.2393 16.3703 11.8087 15.4292C12.6646 14.0121 14.3318 13.2358 15.9357 13.5104Z"
                                                    fill="#000" />
                                            </svg>

                                        </span>
                                    </a>
                                    <a href="compaire.html" class="compaire cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Wool Peacoat
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$15.99</span>
                                        <span class="new-price">$8.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart.html" class="product-btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product-wrapper" data-aos="fade-right">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-6.webp"
                                    alt="product-img">
                                <div class="product-cart-items">
                                    <a href="#" class="cart cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="wishlist.html" class="favourite cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="#AE1C9A" />
                                                <path
                                                    d="M14.6928 12.3935C13.5057 12.54 12.512 13.0197 11.671 13.8546C10.9155 14.6016 10.4615 15.3926 10.201 16.4216C9.73957 18.2049 10.0745 19.9626 11.1835 21.6141C11.8943 22.6723 12.8135 23.6427 14.4993 25.1221C15.571 26.0632 18.8422 28.8096 19.0022 28.9011C19.1511 28.989 19.2069 29 19.5232 29C19.8395 29 19.8953 28.989 20.0442 28.9011C20.2042 28.8096 23.4828 26.0595 24.5471 25.1221C26.2404 23.6354 27.1521 22.6687 27.8629 21.6141C28.9719 19.9626 29.3068 18.2049 28.8454 16.4216C28.5849 15.3926 28.1309 14.6016 27.3754 13.8546C26.6237 13.1113 25.8199 12.6828 24.7667 12.4631C24.2383 12.3533 23.2632 12.3423 22.8018 12.4448C21.5142 12.7194 20.528 13.3529 19.6274 14.4808L19.5232 14.609L19.4227 14.4808C18.5333 13.3749 17.562 12.7414 16.3228 12.4631C15.9544 12.3789 15.1059 12.3423 14.6928 12.3935ZM15.9357 13.5104C16.9926 13.6935 17.9044 14.294 18.6263 15.2864C18.7491 15.4585 18.9017 15.6636 18.9613 15.7478C19.2367 16.1286 19.8098 16.1286 20.0851 15.7478C20.1447 15.6636 20.2973 15.4585 20.4201 15.2864C21.4062 13.9315 22.7795 13.2944 24.2755 13.4958C25.9352 13.7191 27.2303 14.8616 27.7252 16.5424C28.116 17.8717 27.9448 19.2668 27.234 20.5228C26.6386 21.5738 25.645 22.676 23.9145 24.203C23.0772 24.939 19.5567 27.9198 19.5232 27.9198C19.486 27.9198 15.9804 24.95 15.1319 24.203C12.4711 21.8557 11.4217 20.391 11.1686 18.6736C11.0049 17.5641 11.2393 16.3703 11.8087 15.4292C12.6646 14.0121 14.3318 13.2358 15.9357 13.5104Z"
                                                    fill="#000" />
                                            </svg>

                                        </span>
                                    </a>
                                    <a href="compaire.html" class="compaire cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Stylish Earrings
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$17.99</span>
                                        <span class="new-price">$9.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart.html" class="product-btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product-wrapper" data-aos="fade-right">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-7.webp"
                                    alt="product-img">
                                <div class="product-cart-items">
                                    <a href="#" class="cart cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="wishlist.html" class="favourite cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="#AE1C9A" />
                                                <path
                                                    d="M14.6928 12.3935C13.5057 12.54 12.512 13.0197 11.671 13.8546C10.9155 14.6016 10.4615 15.3926 10.201 16.4216C9.73957 18.2049 10.0745 19.9626 11.1835 21.6141C11.8943 22.6723 12.8135 23.6427 14.4993 25.1221C15.571 26.0632 18.8422 28.8096 19.0022 28.9011C19.1511 28.989 19.2069 29 19.5232 29C19.8395 29 19.8953 28.989 20.0442 28.9011C20.2042 28.8096 23.4828 26.0595 24.5471 25.1221C26.2404 23.6354 27.1521 22.6687 27.8629 21.6141C28.9719 19.9626 29.3068 18.2049 28.8454 16.4216C28.5849 15.3926 28.1309 14.6016 27.3754 13.8546C26.6237 13.1113 25.8199 12.6828 24.7667 12.4631C24.2383 12.3533 23.2632 12.3423 22.8018 12.4448C21.5142 12.7194 20.528 13.3529 19.6274 14.4808L19.5232 14.609L19.4227 14.4808C18.5333 13.3749 17.562 12.7414 16.3228 12.4631C15.9544 12.3789 15.1059 12.3423 14.6928 12.3935ZM15.9357 13.5104C16.9926 13.6935 17.9044 14.294 18.6263 15.2864C18.7491 15.4585 18.9017 15.6636 18.9613 15.7478C19.2367 16.1286 19.8098 16.1286 20.0851 15.7478C20.1447 15.6636 20.2973 15.4585 20.4201 15.2864C21.4062 13.9315 22.7795 13.2944 24.2755 13.4958C25.9352 13.7191 27.2303 14.8616 27.7252 16.5424C28.116 17.8717 27.9448 19.2668 27.234 20.5228C26.6386 21.5738 25.645 22.676 23.9145 24.203C23.0772 24.939 19.5567 27.9198 19.5232 27.9198C19.486 27.9198 15.9804 24.95 15.1319 24.203C12.4711 21.8557 11.4217 20.391 11.1686 18.6736C11.0049 17.5641 11.2393 16.3703 11.8087 15.4292C12.6646 14.0121 14.3318 13.2358 15.9357 13.5104Z"
                                                    fill="#000" />
                                            </svg>

                                        </span>
                                    </a>
                                    <a href="compaire.html" class="compaire cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Leather Dress Shoes
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$20.99</span>
                                        <span class="new-price">$8.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart.html" class="product-btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product-wrapper" data-aos="fade-right">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-8.webp"
                                    alt="product-img">
                                <div class="product-cart-items">
                                    <a href="#" class="cart cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="wishlist.html" class="favourite cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="#AE1C9A" />
                                                <path
                                                    d="M14.6928 12.3935C13.5057 12.54 12.512 13.0197 11.671 13.8546C10.9155 14.6016 10.4615 15.3926 10.201 16.4216C9.73957 18.2049 10.0745 19.9626 11.1835 21.6141C11.8943 22.6723 12.8135 23.6427 14.4993 25.1221C15.571 26.0632 18.8422 28.8096 19.0022 28.9011C19.1511 28.989 19.2069 29 19.5232 29C19.8395 29 19.8953 28.989 20.0442 28.9011C20.2042 28.8096 23.4828 26.0595 24.5471 25.1221C26.2404 23.6354 27.1521 22.6687 27.8629 21.6141C28.9719 19.9626 29.3068 18.2049 28.8454 16.4216C28.5849 15.3926 28.1309 14.6016 27.3754 13.8546C26.6237 13.1113 25.8199 12.6828 24.7667 12.4631C24.2383 12.3533 23.2632 12.3423 22.8018 12.4448C21.5142 12.7194 20.528 13.3529 19.6274 14.4808L19.5232 14.609L19.4227 14.4808C18.5333 13.3749 17.562 12.7414 16.3228 12.4631C15.9544 12.3789 15.1059 12.3423 14.6928 12.3935ZM15.9357 13.5104C16.9926 13.6935 17.9044 14.294 18.6263 15.2864C18.7491 15.4585 18.9017 15.6636 18.9613 15.7478C19.2367 16.1286 19.8098 16.1286 20.0851 15.7478C20.1447 15.6636 20.2973 15.4585 20.4201 15.2864C21.4062 13.9315 22.7795 13.2944 24.2755 13.4958C25.9352 13.7191 27.2303 14.8616 27.7252 16.5424C28.116 17.8717 27.9448 19.2668 27.234 20.5228C26.6386 21.5738 25.645 22.676 23.9145 24.203C23.0772 24.939 19.5567 27.9198 19.5232 27.9198C19.486 27.9198 15.9804 24.95 15.1319 24.203C12.4711 21.8557 11.4217 20.391 11.1686 18.6736C11.0049 17.5641 11.2393 16.3703 11.8087 15.4292C12.6646 14.0121 14.3318 13.2358 15.9357 13.5104Z"
                                                    fill="#000" />
                                            </svg>

                                        </span>
                                    </a>
                                    <a href="compaire.html" class="compaire cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Trendy Bucket Hat
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$13.99</span>
                                        <span class="new-price">$7.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart.html" class="product-btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product-wrapper" data-aos="fade-right">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-10.webp"
                                    alt="product-img">
                                <div class="product-cart-items">
                                    <a href="#" class="cart cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="wishlist.html" class="favourite cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="#AE1C9A" />
                                                <path
                                                    d="M14.6928 12.3935C13.5057 12.54 12.512 13.0197 11.671 13.8546C10.9155 14.6016 10.4615 15.3926 10.201 16.4216C9.73957 18.2049 10.0745 19.9626 11.1835 21.6141C11.8943 22.6723 12.8135 23.6427 14.4993 25.1221C15.571 26.0632 18.8422 28.8096 19.0022 28.9011C19.1511 28.989 19.2069 29 19.5232 29C19.8395 29 19.8953 28.989 20.0442 28.9011C20.2042 28.8096 23.4828 26.0595 24.5471 25.1221C26.2404 23.6354 27.1521 22.6687 27.8629 21.6141C28.9719 19.9626 29.3068 18.2049 28.8454 16.4216C28.5849 15.3926 28.1309 14.6016 27.3754 13.8546C26.6237 13.1113 25.8199 12.6828 24.7667 12.4631C24.2383 12.3533 23.2632 12.3423 22.8018 12.4448C21.5142 12.7194 20.528 13.3529 19.6274 14.4808L19.5232 14.609L19.4227 14.4808C18.5333 13.3749 17.562 12.7414 16.3228 12.4631C15.9544 12.3789 15.1059 12.3423 14.6928 12.3935ZM15.9357 13.5104C16.9926 13.6935 17.9044 14.294 18.6263 15.2864C18.7491 15.4585 18.9017 15.6636 18.9613 15.7478C19.2367 16.1286 19.8098 16.1286 20.0851 15.7478C20.1447 15.6636 20.2973 15.4585 20.4201 15.2864C21.4062 13.9315 22.7795 13.2944 24.2755 13.4958C25.9352 13.7191 27.2303 14.8616 27.7252 16.5424C28.116 17.8717 27.9448 19.2668 27.234 20.5228C26.6386 21.5738 25.645 22.676 23.9145 24.203C23.0772 24.939 19.5567 27.9198 19.5232 27.9198C19.486 27.9198 15.9804 24.95 15.1319 24.203C12.4711 21.8557 11.4217 20.391 11.1686 18.6736C11.0049 17.5641 11.2393 16.3703 11.8087 15.4292C12.6646 14.0121 14.3318 13.2358 15.9357 13.5104Z"
                                                    fill="#000" />
                                            </svg>

                                        </span>
                                    </a>
                                    <a href="compaire.html" class="compaire cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Rainbow Dress
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$12.99</span>
                                        <span class="new-price">$6.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart.html" class="product-btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- top-sell-section-end--------------->

    <!--------------- flash-section--------------->
    <section class="product best-product">
        <div class="container">
            <div class="section-title">
                <h5>Flash Sale</h5>
                <a href="flash-sale.html" class="view">View All</a>
            </div>
            <div class="best-product-section">
                <div class="row g-4">
                    <div class="col-xl-2 col-md-4">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-9.webp"
                                    alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Half Sleeve Dress
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$12.99</span>
                                        <span class="new-price">$6.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-10.webp"
                                    alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Feminine Wrap coat
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$18.99</span>
                                        <span class="new-price">$10.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-2.webp"
                                    alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Black suit
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$10.99</span>
                                        <span class="new-price">$8.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-4.webp"
                                    alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Rainbow Party Dress
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$19.99</span>
                                        <span class="new-price">$8.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-1.webp"
                                    alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Rainbow Sequin Skart
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$15.99</span>
                                        <span class="new-price">$7.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-11.webp"
                                    alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Red Sequin Hat
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$13.99</span>
                                        <span class="new-price">$7.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-13.webp"
                                    alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Gradient Party Shirt
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$19.99</span>
                                        <span class="new-price">$10.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-1.webp"
                                    alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Flower Design Dress
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$19.99</span>
                                        <span class="new-price">$8.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-12.webp"
                                    alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Blue Suit
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$10.99</span>
                                        <span class="new-price">$5.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-3.webp"
                                    alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">Blue Party Dress
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$9.99</span>
                                        <span class="new-price">$6.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-6.webp"
                                    alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">White Hat
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$29.99</span>
                                        <span class="new-price">$26.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="./assets/images/homepage-one/product-img/product-img-5.webp"
                                    alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800" />
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info.html" class="product-details">White Checked Shirt
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$19.99</span>
                                        <span class="new-price">$16.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- flash-section-end--------------->

    <!--------------- footer-section--------------->
    <section class="product footer">
        <div class="container">
            <div class="footer-service-section">
                <div class="row gy-4">
                    <div class="col-lg-3  col-sm-6">
                        <div class="service-wrapper free-shipping">
                            <div class="service-img">
                                <span>
                                    <svg width="32" height="37" viewBox="0 0 36 37" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1H5.63636V24.1818H35" stroke="#F9FFFB" stroke-width="2"
                                            stroke-miterlimit="10" stroke-linecap="square" />
                                        <path
                                            d="M8.72763 35.0021C10.4347 35.0021 11.8185 33.6183 11.8185 31.9112C11.8185 30.2042 10.4347 28.8203 8.72763 28.8203C7.02057 28.8203 5.63672 30.2042 5.63672 31.9112C5.63672 33.6183 7.02057 35.0021 8.72763 35.0021Z"
                                            stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="square" />
                                        <path
                                            d="M31.9073 35.0021C33.6144 35.0021 34.9982 33.6183 34.9982 31.9112C34.9982 30.2042 33.6144 28.8203 31.9073 28.8203C30.2003 28.8203 28.8164 30.2042 28.8164 31.9112C28.8164 33.6183 30.2003 35.0021 31.9073 35.0021Z"
                                            stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="square" />
                                        <path d="M34.9982 1H11.8164V18H34.9982V1Z" stroke="#F9FFFB" stroke-width="2"
                                            stroke-miterlimit="10" stroke-linecap="square" />
                                        <path d="M11.8164 7.17969H34.9982" stroke="#F9FFFB" stroke-width="2"
                                            stroke-miterlimit="10" stroke-linecap="square" />
                                    </svg>

                                </span>
                            </div>
                            <div class="service-content">
                                <h5 class="service-info service-title">Free Shipping</h5>
                                <p class="service-info service-details">When ordering over $100</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="service-wrapper free-shipping">
                            <div class="service-img">
                                <span>
                                    <svg width="32" height="37" viewBox="0 0 32 34" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M31 17.4492C31 25.6992 24.25 32.4492 16 32.4492C7.75 32.4492 1 25.6992 1 17.4492C1 9.19922 7.75 2.44922 16 2.44922C21.85 2.44922 26.95 5.74922 29.35 10.6992"
                                            stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10" />
                                        <path d="M30.7 2L29.5 10.85L20.5 9.65" stroke="#F9FFFB" stroke-width="2"
                                            stroke-miterlimit="10" stroke-linecap="square" />
                                    </svg>
                                </span>
                            </div>
                            <div class="service-content">
                                <h5 class="service-info service-title">Free Return</h5>
                                <p class="service-info service-details">Get Return within 30 days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="service-wrapper free-shipping">
                            <div class="service-img">
                                <span>
                                    <svg width="32" height="37" viewBox="0 0 32 38" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.6654 18.668H9.33203V27.0013H22.6654V18.668Z" stroke="#F9FFFB"
                                            stroke-width="2" stroke-miterlimit="10" stroke-linecap="square" />
                                        <path
                                            d="M12.668 18.6654V13.6654C12.668 11.832 14.168 10.332 16.0013 10.332C17.8346 10.332 19.3346 11.832 19.3346 13.6654V18.6654"
                                            stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="square" />
                                        <path
                                            d="M31 22C31 30.3333 24.3333 37 16 37C7.66667 37 1 30.3333 1 22V5.33333L16 2L31 5.33333V22Z"
                                            stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="square" />
                                    </svg>
                                </span>
                            </div>
                            <div class="service-content">
                                <h5 class="service-info service-title">Secure Payment</h5>
                                <p class="service-info service-details">100% Secure Online Payment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="service-wrapper free-shipping">
                            <div class="service-img">
                                <span>
                                    <svg width="32" height="37" viewBox="0 0 32 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 13H5.5C2.95 13 1 11.05 1 8.5V1H7" stroke="#F9FFFB" stroke-width="2"
                                            stroke-miterlimit="10" />
                                        <path d="M25 13H26.5C29.05 13 31 11.05 31 8.5V1H25" stroke="#F9FFFB"
                                            stroke-width="2" stroke-miterlimit="10" />
                                        <path d="M16 28V22" stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10" />
                                        <path d="M16 22C11.05 22 7 17.95 7 13V1H25V13C25 17.95 20.95 22 16 22Z"
                                            stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="square" />
                                        <path d="M25 34H7C7 30.7 9.7 28 13 28H19C22.3 28 25 30.7 25 34Z"
                                            stroke="#F9FFFB" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="square" />
                                    </svg>
                                </span>
                            </div>
                            <div class="service-content">
                                <h5 class="service-info service-title">Best Quality</h5>
                                <p class="service-info service-details">Original Product Guarenteed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-section">
                <div class="row gy-5">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-order">
                            <div class="logo">
                                <img src="{{ asset('resources/user/assets/images/logos/footer-logo.webp') }}" alt="logo">
                            </div>
                            <div class="footer-link order-link">
                                <ul>
                                    <li><a href="order.html">Track Order</a></li>
                                    <li><a href="cart.html">Delivery & Returns</a></li>
                                    <li><a href="about.html">Warranty</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="about-us">
                            <h4 class="footer-heading footer-title">
                                About Us
                            </h4>
                            <div class="footer-link about-link">
                                <ul>
                                    <li><a href="about.html">Rave’s Story</a></li>
                                    <li><a href="about.html">Work With Us</a></li>
                                    <li><a href="about.html">Coporate News</a></li>
                                    <li><a href="about.html">Investors</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="links">
                            <h4 class="footer-heading footer-title">
                                Useful Links
                            </h4>
                            <div class="footer-link useful-link">
                                <ul>
                                    <li><a href="about.html">Secure Payment</a></li>
                                    <li><a href="privacy.html">Privacy Policy</a></li>
                                    <li><a href="terms.html">Terms of Use</a></li>
                                    <li><a href="product-sidebar.html">Archived Products</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="contact-info">
                            <h4 class="footer-heading footer-title">
                                Contact Info
                            </h4>
                            <div class="footer-link contact-link">
                                <div class="address">
                                    <div class="icon">
                                        <span>
                                            <svg width="44" height="45" viewBox="0 0 44 45" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="21.9995" cy="22.9961" r="21.5" stroke="#424242"></circle>
                                                <g clip-path="url(#clip0_2343_13859)">
                                                    <path
                                                        d="M22.0218 13.9961C26.4153 14.0049 29.7134 17.7202 28.8665 21.6964C28.4484 23.66 27.5123 25.4261 26.3138 27.0614C25.1774 28.6116 23.9185 30.0879 22.6867 31.5779C22.2178 32.1454 21.804 32.1262 21.3001 31.5795C19.1664 29.2642 17.2295 26.8278 15.9102 24.0253C15.3696 22.8757 14.9978 21.6836 14.9995 20.4176C15.003 16.8701 18.1568 13.9881 22.0218 13.9961ZM22.0297 30.36C22.9045 29.2763 23.7479 28.3049 24.5037 27.2782C25.8116 25.5008 26.9568 23.6407 27.4616 21.5142C28.0739 18.934 26.466 16.3499 23.7566 15.5367C21.0149 14.713 18.0326 15.9324 16.8743 18.344C16.1858 19.777 16.3188 21.2091 16.8647 22.6413C17.6756 24.7695 18.9512 26.6632 20.399 28.4655C20.8889 29.0764 21.4226 29.6576 22.0297 30.36Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M24.7977 20.4357C24.7916 21.8486 23.5204 22.9982 21.9728 22.9886C20.4567 22.9797 19.2005 21.8197 19.1987 20.4253C19.1961 19.0148 20.4664 17.85 22.0043 17.8516C23.5432 17.8532 24.8029 19.0188 24.7977 20.4357ZM23.3953 20.4213C23.3953 19.7156 22.7873 19.1481 22.021 19.1384C21.2371 19.128 20.6011 19.702 20.6011 20.4213C20.6011 21.1253 21.2109 21.6937 21.9772 21.7033C22.7663 21.7121 23.3953 21.143 23.3953 20.4213Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2343_13859">
                                                        <rect width="14" height="18" fill="white"
                                                            transform="translate(14.9995 13.9961)"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="details">
                                        <h4 class="footer-heading">Address:</h4>
                                        <p>4517 Washington Ave. Manchester, Kentucky 39495</p>
                                    </div>
                                </div>
                                <div class="phone address">
                                    <div class="icon">
                                        <span>
                                            <svg width="44" height="45" viewBox="0 0 44 45" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="21.9995" cy="22.9961" r="21.5" stroke="#424242"></circle>
                                                <g clip-path="url(#clip0_56_7)">
                                                    <path
                                                        d="M26.9779 30.9959C25.7937 30.9581 24.6221 30.5625 23.5005 30.0096C19.5679 28.0716 16.6582 25.1275 14.8109 21.1599C14.2944 20.0502 13.9265 18.8947 14.0112 17.6423C14.0558 16.9879 14.2937 16.4177 14.7489 15.9459C15.1954 15.4839 15.6439 15.0233 16.1124 14.5833C16.9448 13.8008 17.8545 13.7981 18.6795 14.5866C19.3846 15.2596 20.075 15.9492 20.7514 16.6514C21.5858 17.5175 21.5732 18.3743 20.7348 19.2431C20.3969 19.5935 20.051 19.9387 19.6925 20.2685C19.5419 20.4072 19.5299 20.5161 19.6205 20.692C20.257 21.9198 21.1526 22.9459 22.1916 23.8359C22.8434 24.3941 23.5884 24.8434 24.2909 25.3425C24.4555 25.46 24.5754 25.4295 24.7174 25.2814C25.1092 24.8753 25.5058 24.4704 25.9276 24.0954C26.6407 23.4616 27.5164 23.4689 28.2035 24.1259C28.9725 24.8607 29.7269 25.6113 30.4647 26.3772C31.1558 27.0953 31.1784 27.9907 30.5187 28.7333C30.0415 29.2709 29.5317 29.782 29.0105 30.2784C28.4727 30.7915 27.8003 30.9952 26.9779 30.9959ZM27.0239 30.1377C27.6637 30.1616 28.1902 29.9307 28.6247 29.4647C28.9645 29.1004 29.3198 28.7499 29.6703 28.3962C30.2688 27.7922 30.2734 27.4119 29.6796 26.8199C29.0365 26.1781 28.3921 25.5376 27.7463 24.8985C27.2265 24.3841 26.8546 24.3848 26.3241 24.9045C25.9203 25.3 25.5244 25.7036 25.1206 26.0985C24.7974 26.415 24.5148 26.4774 24.1316 26.2418C23.4165 25.8011 22.6768 25.3823 22.0303 24.8534C20.6835 23.7523 19.5132 22.4853 18.7561 20.8917C18.5062 20.3661 18.5576 20.1597 18.9861 19.7502C19.3706 19.3825 19.7545 19.0141 20.1243 18.6325C20.6122 18.1301 20.6115 17.7518 20.1237 17.2586C19.4472 16.5724 18.7641 15.8921 18.0764 15.2171C17.5952 14.7446 17.1827 14.7512 16.6922 15.2284C16.311 15.5994 15.9478 15.989 15.5586 16.3507C15.0221 16.8491 14.8255 17.4597 14.8695 18.1739C14.9275 19.117 15.2221 19.9964 15.6179 20.838C17.3853 24.5985 20.1457 27.402 23.8823 29.2424C24.8707 29.7302 25.9036 30.0959 27.0239 30.1377Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_56_7">
                                                        <rect width="17" height="17" fill="white"
                                                            transform="translate(13.9995 13.9961)"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="details">
                                        <h4 class="footer-heading">Phone:</h4>
                                        <p>+000000000000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>
    <!--------------- footer-section-end--------------->





    <!--------------- jQuery ---------------->
    <script src="{{ asset('resources/user/assets/js/jquery_3.7.1.min.js') }}"></script>

    <!--------------- bootstrap-js ---------------->
    <script src="{{ asset('resources/user/assets/js/bootstrap_5.3.2.bundle.min.js') }}"></script>

    <!--------------- Range-Slider-js ---------------->
    <script src="{{ asset('resources/user/assets/js/nouislider.min.js') }}"></script>

    <!--------------- scroll-Animation-js ---------------->
    <script src="{{ asset('resources/user/assets/js/aos-3.0.0.js') }}"></script>

    <!--------------- swiper-js ---------------->
    <script src="{{ asset('resources/user/assets/js/swiper10-bundle.min.js') }}"></script>

    <!--------------- additional-js ---------------->
    <script src="{{ asset('resources/user/assets/js/shopus.js') }}"></script>
    @livewireScripts

</body>

</html>