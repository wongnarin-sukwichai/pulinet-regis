<template>
    <div class="bg-white">
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
                        <router-link
                            to="intro"
                            class="rounded-md bg-indigo-800 px-3.5 py-2.5 text-sm font-normal text-white shadow-sm hover:bg-indigo-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                            >ลงทะเบียนเข้าร่วมการประชุม</router-link
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
                                                <div
                                                    class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                >
                                                    1
                                                </div>
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm font-medium whitespace-nowrap border-r"
                                            >
                                                <div
                                                    class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                >
                                                    วงศ์นรินทร์ สุขวิชัย
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
                                                <div
                                                    class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                >
                                                    2
                                                </div>
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm font-medium whitespace-nowrap border-r"
                                            >
                                                <div
                                                    class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                >
                                                    ภาณุวัฒน์ เพียรภายลุน
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
                                                        color="#f87171"
                                                        @click="toPayment(2)"
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
</template>

<script>
import "boxicons";

export default {
    mounted() {
        this.getMemList();
    },
    data() {
        return {
            showMenu: false,
            memList: ""
        };
    },
    methods: {
        isShowMenu() {
            this.showMenu = !this.showMenu;
        },
        toPayment(id) {
            this.$router.push("/payment/" + id);
        },
        getMemList() {
            axios.get('/api/memlist').then((response) => {
                this.memList = response.data
            }) .catch((err) => {

            })
        }
    },
};
</script>
