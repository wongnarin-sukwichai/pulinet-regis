<template>
    <div class="bg-white">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav
                class="flex items-center justify-between p-6 lg:px-8"
                aria-label="Global"
            >
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img
                            class="h-8 w-auto"
                            src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt=""
                        />
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button
                        type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700 cursor-pointer"
                        @click="isShowMenu()"
                    >
                        <span class="sr-only">Open main menu</span>
                        <svg
                            class="h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                            />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <router-link to="login">
                        <button
                            class="flex p-2 bg-indigo-700 hover:bg-indigo-800 cursor-pointer rounded-lg text-normal text-white text-sm shadow-lg"
                        >
                            <p class="pr-1">เข้าสู่ระบบ</p>
                            <box-icon
                                name="right-arrow"
                                type="solid"
                                size="xs"
                                color="white"
                                class="flex justify-center items-center"
                            ></box-icon>
                        </button>
                    </router-link>
                </div>
            </nav>

            <!-- Mobile menu, show/hide based on menu open state. -->
            <transition name="fade" mode="out-in">
                <div
                    class="lg:hidden"
                    role="dialog"
                    aria-modal="true"
                    v-show="showMenu"
                >
                    <!-- Background backdrop, show/hide based on slide-over state. -->
                    <div class="fixed inset-0 z-50"></div>
                    <div
                        class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
                    >
                        <div class="flex items-center justify-between">
                            <a href="#" class="-m-1.5 p-1.5">
                                <span class="sr-only">Your Company</span>
                                <img
                                    class="h-8 w-auto"
                                    src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                                    alt=""
                                />
                            </a>
                            <button
                                type="button"
                                class="-m-2.5 rounded-md p-2.5 text-gray-700 cursor-pointer"
                                @click="isShowMenu()"
                            >
                                <span class="sr-only">Close menu</span>
                                <svg
                                    class="h-6 w-6"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                        <div class="mt-6 flow-root border-t-2 border-gray-300">
                            <div
                                class="-my-6 divide-y divide-gray-500/10 mt-0.5"
                            >
                                <div class="py-6">
                                    <router-link
                                        class="flex grid grid-cols-2 p-3 cursor-pointer text-normal border rounded-full shadow-lg text-white bg-gradient-to-r from-blue-500 to-indigo-600"
                                        to="login"
                                    >
                                        <p class="pl-1 text-sm">เข้าสู่ระบบ</p>
                                        <div class="flex justify-end">
                                            <box-icon
                                                class="mr-4"
                                                name="chevrons-right"
                                                type="solid"
                                                size="xs"
                                                color="white"
                                                animation="fade-right"
                                            ></box-icon>
                                        </div>
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </transition>
        </header>

        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div
                class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                aria-hidden="true"
            >
                <div
                    class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="
                        clip-path: polygon(
                            74.1% 44.1%,
                            100% 61.6%,
                            97.5% 26.9%,
                            85.5% 0.1%,
                            80.7% 2%,
                            72.5% 32.5%,
                            60.2% 62.4%,
                            52.4% 68.1%,
                            47.5% 58.3%,
                            45.2% 34.5%,
                            27.5% 76.7%,
                            0.1% 64.9%,
                            17.9% 100%,
                            27.6% 76.8%,
                            76.1% 97.7%,
                            74.1% 44.1%
                        );
                    "
                ></div>
            </div>
            <div class="mx-auto max-w-2xl py-32 sm:py-32 lg:py-32">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div
                        class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20"
                    >
                        ติดตามความเคลื่อนไหวการจัดประชุมได้ที่ :
                        <a href="#" class="font-semibold text-indigo-600"
                            ><span
                                class="absolute inset-0"
                                aria-hidden="true"
                            ></span
                            >pulinet2025.pulinet.org
                            <span aria-hidden="true">&rarr;</span></a
                        >
                    </div>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold">ระบบลงทะเบียนเข้าร่วม</p>
                    <p
                        class="text-4xl font-bold tracking-tight text-gray-900 sm:text-4xl pt-5"
                    >
                        การประชุมวิชาการระดับชาติ PULINET ครั้งที่ 15
                    </p>
                    <p class="text-2xl pt-2 text-gray-400">
                        (The 15th PULINET National Conference – PULINET 2024)
                    </p>
                    <p class="mt-6 text-lg text-gray-400">
                        จัดโดย ศูนย์บรรณสารและสื่อการศึกษา มหาวิทยาลัยแม่ฟ้าหลวง
                    </p>
                    <p class="text-lg text-gray-400">
                        ร่วมกับ ข่ายงานห้องสมุดมหาวิทยาลัยส่วนภูมิภาค (PULINET)
                    </p>
                    <p class="text-lg text-gray-400">
                        ระหว่างวันที่ 10 - 12 มกราคม 2567 ณ
                        มหาวิทยาลัยแม่ฟ้าหลวง
                    </p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a
                            href="#"
                            class="rounded-md bg-indigo-800 px-3.5 py-2.5 text-sm font-normal text-white shadow-sm hover:bg-indigo-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                            >ลงทะเบียนเข้าร่วมการประชุม</a
                        >
                    </div>
                </div>
            </div>
            <div
                class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                aria-hidden="true"
            >
                <div
                    class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                    style="
                        clip-path: polygon(
                            74.1% 44.1%,
                            100% 61.6%,
                            97.5% 26.9%,
                            85.5% 0.1%,
                            80.7% 2%,
                            72.5% 32.5%,
                            60.2% 62.4%,
                            52.4% 68.1%,
                            47.5% 58.3%,
                            45.2% 34.5%,
                            27.5% 76.7%,
                            0.1% 64.9%,
                            17.9% 100%,
                            27.6% 76.8%,
                            76.1% 97.7%,
                            74.1% 44.1%
                        );
                    "
                ></div>
            </div>

            <!-- DataTable-->
            <section class="container px-4 mx-auto">
                <div class="mt-6 md:flex md:items-center md:justify-between">
                    <div class="flex p-2 border-2 border-dotted rounded-lg">
                        <div>
                            <box-icon name="notepad" class="pr-2"></box-icon>
                        </div>
                        <div>
                            :
                            รายชื่อผู้ลงทะเบียนเข้าร่วมการประชุม/นำเสนอผลงานวิชาการ
                        </div>
                    </div>

                    <div class="relative flex items-center mt-4 md:mt-0">
                        <span class="absolute">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
                                />
                            </svg>
                        </span>

                        <input
                            type="text"
                            placeholder="Search"
                            class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                        />
                    </div>
                </div>

                <div class="flex flex-col mt-6">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div
                            class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8"
                        >
                            <div
                                class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg"
                            >
                                <table
                                    class="min-w-full divide-y divide-gray-200 dark:divide-gray-700"
                                >
                                    <thead class="bg-gray-50 dark:bg-gray-800">
                                        <tr>
                                            <th
                                                scope="col"
                                                class="py-3.5 px-4 text-sm font-normal text-gray-500 border-r"
                                            >
                                                <span>#</span>
                                            </th>

                                            <th
                                                scope="col"
                                                class="py-3.5 px-4 text-sm font-normal text-gray-500 border-r"
                                            >
                                                <span>ชื่อ-นามสกุล</span>
                                            </th>

                                            <th
                                                scope="col"
                                                class="px-12 py-3.5 text-sm font-normal text-gray-500 border-r"
                                            >
                                                ตำแหน่ง
                                            </th>

                                            <th
                                                scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-gray-500 border-r"
                                            >
                                                หน่วยงาน
                                            </th>

                                            <th
                                                scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-gray-500 border-r"
                                            >
                                                ประเภท
                                            </th>

                                            <th
                                                scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-gray-500 border-r"
                                                colspan="3"
                                            >
                                                สถานะการชำระเงิน
                                            </th>

                                            <th
                                                scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-gray-500"
                                            >
                                                ชำระค่าลงทะเบียน
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900"
                                    >
                                        <tr>
                                            <td
                                                class="px-4 py-4 text-sm font-medium whitespace-nowrap border-r"
                                            >
                                                <div>
                                                    <h2
                                                        class="font-medium text-gray-800 dark:text-white"
                                                    >
                                                        1
                                                    </h2>
                                                </div>
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm font-medium whitespace-nowrap border-r"
                                            >
                                                <div>
                                                    <h2
                                                        class="font-medium text-gray-800 dark:text-white"
                                                    >
                                                        วงศ์นรินทร์ สุขวิชัย
                                                    </h2>
                                                </div>
                                            </td>
                                            <td
                                                class="px-12 py-4 text-sm font-medium whitespace-nowrap border-r"
                                            >
                                                <div
                                                    class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                >
                                                    นักวิชาการคอมพิวเตอร์
                                                </div>
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm whitespace-nowrap border-r"
                                            >
                                                <div
                                                    class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                >
                                                    สำนักวิทยบริการ
                                                    มหาวิทยาลัยมหาสารคาม
                                                </div>
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm whitespace-nowrap border-r"
                                            >
                                                <div
                                                    class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                >
                                                    ผู้เข้าร่วมการประชุม
                                                </div>
                                            </td>

                                            <td
                                                class="px-4 py-4 text-sm whitespace-nowrap"
                                            >
                                                <div
                                                    class="flex items-center pr-1"
                                                >
                                                    <span
                                                        class="flex items-center justify-center w-5 h-5 me-2 text-xs border rounded-full shrink-0 bg-gray-200"
                                                    >
                                                        1
                                                    </span>
                                                    <span class="text-gray-600"
                                                        >ลงทะเบียน</span
                                                    >
                                                    <svg
                                                        class="w-3 h-3 ms-2 sm:ms-1 text-gray-400"
                                                        aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        fill="none"
                                                        viewBox="0 0 12 10"
                                                    >
                                                        <path
                                                            stroke="currentColor"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="m7 9 4-4-4-4M1 9l4-4-4-4"
                                                        />
                                                    </svg>
                                                </div>
                                            </td>

                                            <td
                                                class="px-4 py-4 text-sm whitespace-nowrap"
                                            >
                                                <div
                                                    class="flex items-center pr-1"
                                                >
                                                    <span
                                                        class="flex items-center justify-center w-5 h-5 me-2 text-xs border rounded-full shrink-0 text-white bg-blue-600"
                                                    >
                                                        2
                                                    </span>
                                                    <span class="text-blue-600"
                                                        >ชำระค่าลงทะเบียน</span
                                                    >
                                                    <svg
                                                        class="w-3 h-3 ms-2 sm:ms-1 text-blue-600"
                                                        aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        fill="none"
                                                        viewBox="0 0 12 10"
                                                    >
                                                        <path
                                                            stroke="currentColor"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="m7 9 4-4-4-4M1 9l4-4-4-4"
                                                        />
                                                    </svg>
                                                </div>
                                            </td>

                                            <td
                                                class="px-4 py-4 text-sm whitespace-nowrap border-r"
                                            >
                                                <div class="flex items-center">
                                                    <span
                                                        class="flex items-center justify-center w-5 h-5 me-2 text-xs border rounded-full shrink-0 text-white bg-green-600"
                                                    >
                                                        3
                                                    </span>
                                                    <span class="text-green-600"
                                                        >เสร็จสิ้น</span
                                                    >
                                                </div>
                                            </td>

                                            <td
                                                class="flex justify-center px-4 py-4 text-sm whitespace-nowrap"
                                            ></td>
                                        </tr>

                                        <tr>
                                            <td
                                                class="px-4 py-4 text-sm font-medium whitespace-nowrap border-r"
                                            >
                                                <div>
                                                    <h2
                                                        class="font-medium text-gray-800 dark:text-white"
                                                    >
                                                        2
                                                    </h2>
                                                </div>
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm font-medium whitespace-nowrap border-r"
                                            >
                                                <div>
                                                    <h2
                                                        class="font-medium text-gray-800 dark:text-white"
                                                    >
                                                        ภาณุวัฒน์ เพียรภายลุน
                                                    </h2>
                                                </div>
                                            </td>
                                            <td
                                                class="px-12 py-4 text-sm font-medium whitespace-nowrap border-r"
                                            >
                                                <div
                                                    class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                >
                                                    นักวิชาการคอมพิวเตอร์
                                                </div>
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm whitespace-nowrap border-r"
                                            >
                                                <div
                                                    class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                >
                                                    สำนักวิทยบริการ
                                                    มหาวิทยาลัยมหาสารคาม
                                                </div>
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm whitespace-nowrap border-r"
                                            >
                                                <div
                                                    class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                >
                                                    ผู้เข้าร่วมการประชุม
                                                </div>
                                            </td>

                                            <td
                                                class="px-4 py-4 text-sm whitespace-nowrap"
                                            >
                                                <div
                                                    class="flex items-center pr-1"
                                                >
                                                    <span
                                                        class="flex items-center justify-center w-5 h-5 me-2 text-xs border rounded-full shrink-0 bg-gray-200"
                                                    >
                                                        1
                                                    </span>
                                                    <span class="text-gray-600"
                                                        >ลงทะเบียน</span
                                                    >
                                                    <svg
                                                        class="w-3 h-3 ms-2 sm:ms-1 text-gray-400"
                                                        aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        fill="none"
                                                        viewBox="0 0 12 10"
                                                    >
                                                        <path
                                                            stroke="currentColor"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="m7 9 4-4-4-4M1 9l4-4-4-4"
                                                        />
                                                    </svg>
                                                </div>
                                            </td>

                                            <td
                                                class="px-4 py-4 text-sm whitespace-nowrap"
                                            ></td>

                                            <td
                                                class="px-4 py-4 text-sm whitespace-nowrap border-r"
                                            ></td>

                                            <td
                                                class="flex justify-center px-4 py-4 text-sm whitespace-nowrap"
                                            >
                                                <button
                                                    class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg border-2 border-dotted hover:bg-gray-100"
                                                >
                                                    <box-icon
                                                        name="arrow-to-bottom"
                                                        @click="showModal()"
                                                    ></box-icon>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 sm:flex sm:items-center sm:justify-between">
                    <div class="text-sm text-gray-500">
                        Page
                        <span
                            class="font-medium text-gray-700 dark:text-gray-100"
                            >1 of 10</span
                        >
                    </div>

                    <div class="flex items-center mt-4 gap-x-4 sm:mt-0">
                        <a
                            href="#"
                            class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md sm:w-auto gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-5 h-5 rtl:-scale-x-100"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18"
                                />
                            </svg>

                            <span> previous </span>
                        </a>

                        <a
                            href="#"
                            class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md sm:w-auto gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800"
                        >
                            <span> Next </span>

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-5 h-5 rtl:-scale-x-100"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
            <!-- End DataTable-->
        </div>
    </div>

    <!-- Modal Show -->
    <transition name="fade" mode="out-in">
        <div
            class="relative z-10"
            aria-labelledby="modal-title"
            role="dialog"
            aria-modal="true"
            v-show="isModalShow"
        >
            <div
                class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
            ></div>

            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div
                    class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0"
                >
                    <div
                        class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg"
                    >
                        <br />
                        <div class="grid grid-cols-5 bg-white px-4">
                            <div class="col-span-3 sm:flex sm:items-start">
                                <div
                                    class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-lime-100 sm:mx-0 sm:h-10 sm:w-10"
                                >
                                    <box-icon name="user"></box-icon>
                                </div>
                                <div
                                    class="mt-0 text-center sm:mt-0 sm:ml-4 sm:text-left w-full"
                                >
                                    <label
                                        id="listbox-label"
                                        class="block text-sm font-medium leading-6 text-gray-900"
                                    >
                                        รหัสนิสิต :</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        required
                                    />
                                </div>
                            </div>

                            <div
                                class="col-span-2 flex items-left justify-left mx-5 py-5"
                            >
                                <div
                                    class="border-dotted border-2 border-sky-500 rounded-lg p-3 text-xs"
                                ></div>
                            </div>
                        </div>

                        <transition name="fade" mode="out-in">
                            <div
                                class="text-rose-500 mx-20"
                                v-show="showAlertInput"
                            >
                                ** กรุณากรอกข้อมูลให้ครบ
                            </div>
                        </transition>

                        <div class="bg-white px-4 pb-4 sm:p-4 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div
                                    class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-lime-100 sm:mx-0 sm:h-10 sm:w-10"
                                >
                                    <box-icon name="check"></box-icon>
                                </div>
                                <div
                                    class="text-center sm:ml-4 sm:text-left w-full"
                                >
                                    <label
                                        id="listbox-label"
                                        class="block text-sm font-medium leading-6 text-gray-900"
                                        >ตรวจสอบรหัสและสิทธิ์ :
                                    </label>

                                    <div class="text-center w-full pt-2">
                                        <label
                                            id="listbox-label"
                                            class="text-sm font-medium leading-6 text-gray-900"
                                        >
                                        </label>
                                        <button
                                            class="block w-full items-center justify-center p-4 px-6 py-2 font-medium border-2 border-green-400 rounded-full shadow-md group text-gray-400 hover:text-black hover:bg-green-200"
                                        >
                                            <span
                                                class="flex items-center justify-center w-full h-full text-xs"
                                                >ตรวจสอบ</span
                                            >
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="sm:flex sm:items-start">
                                <div
                                    class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full"
                                ></div>
                            </div>
                        </div>

                        <div class="bg-white px-4 pt-5 sm:p-4 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div
                                    class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-lime-100 sm:mx-0 sm:h-10 sm:w-10"
                                >
                                    <box-icon name="time"></box-icon>
                                </div>
                                <div
                                    class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full"
                                >
                                    <label
                                        id="listbox-label"
                                        class="block text-sm font-medium leading-6 text-gray-900"
                                    >
                                        จองเวลา :</label
                                    >
                                    <div
                                        class="grid grid-cols-4 p-3 border rounded-lg"
                                    ></div>
                                    <div></div>
                                    <transition name="fade" mode="out-in">
                                        <div
                                            class="pt-2 text-rose-500"
                                            v-show="showAlert"
                                        >
                                            ** ใช้บริการได้ไม่เกิน 3 ชั่วโมง/วัน
                                        </div>
                                    </transition>
                                    <transition name="fade" mode="out-in">
                                        <div
                                            class="pt-2 text-rose-500"
                                            v-show="showAlertRule"
                                        >
                                            **
                                            ใช้บริการต่อคนได้ไม่เกินสิทธิ์คงเหลือ
                                        </div>
                                    </transition>
                                </div>
                            </div>
                        </div>

                        <div class="pt-3">
                            <div
                                class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6"
                            >
                                <button
                                    class="inline-flex w-full justify-center rounded-md bg-green-500 px-3 py-2 text-sm text-white shadow-sm hover:bg-green-600 sm:ml-3 sm:w-auto"
                                >
                                    บันทึก
                                </button>
                                <button
                                    type="button"
                                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm text-gray-900 shadow-sm hover:bg-gray-50 ring-1 ring-inset ring-gray-300 sm:mt-0 sm:w-auto"
                                    @click="close()"
                                >
                                    ออก
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </transition>
</template>

<script>
import "boxicons";

export default {
    mounted() {},
    data() {
        return {
            showMenu: false,
            isModalShow: false,
        };
    },
    methods: {
        isShowMenu() {
            this.showMenu = !this.showMenu;
        },
        showModal() {
            this.isModalShow = true;
        },
        close() {
            this.isModalShow = false;
        },
    },
};
</script>
