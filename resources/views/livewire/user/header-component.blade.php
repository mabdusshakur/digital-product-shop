<div>
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
                    <div class="header-nav-menu">
                        <ul class="menu-list">
                            <li>
                                <a href="index.html">
                                    <span class="list-text">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="about.html">
                                    <span class="list-text">About</span>
                                </a>
                            </li>
                            <li>
                                <a href="contact-us.html">
                                    <span class="list-text">Contact</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
