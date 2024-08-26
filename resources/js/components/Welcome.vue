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
                        (The 15th PULINET National Conference – PULINET 2025)
                    </p>
                    <p class="mt-6 text-lg text-gray-400">
                        จัดโดย สำนักวิทยบริการ มหาวิทยาลัยมหาสารคาม
                    </p>
                    <p class="text-lg text-gray-400">
                        ร่วมกับ ข่ายงานห้องสมุดมหาวิทยาลัยส่วนภูมิภาค (PULINET)
                    </p>
                    <p class="text-lg text-gray-400">
                        ระหว่างวันที่ 15 - 17 มกราคม 2568 ณ
                        อาคารเฉลิมพระเกียรติ ในโอกาสฉลอง<br />พระชนมายุ 5
                        รอบ 2 เมษายน 2558 มหาวิทยาลัยมหาสารคาม
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

            <!-- Information -->
            <div
                class="flex justify-center px-4 overflow-x-auto sm:-mx-6 lg:-mx-8"
            >
                <div class="inline-block pb-4 align-middle md:px-6 lg:px-8">
                    <div
                        class="overflow-hidden border border-gray-200 md:rounded-lg"
                    >
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        scope="col"
                                        class="py-2 px-2 text-xs font-normal text-gray-800 border-r"
                                    >
                                        <p>ลงทะเบียนเข้าร่วมงาน</p>
                                    </th>
                                    <th
                                        scope="col"
                                        class="py-2 px-2 text-xs font-normal text-gray-800 border-r"
                                    >
                                        <p>ลงทะเบียนนำเสนอผลงาน</p>
                                    </th>
                                    <th
                                        scope="col"
                                        class="py-2 px-2 text-xs font-normal text-gray-800 border-r"
                                        colspan="2"
                                    >
                                        <p>
                                            ชำระค่าลงทะเบียนผู้เข้าร่วมและ
                                            & ผู้นำเสนอผลงาน
                                        </p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td
                                        class="px-3 py-3 text-xs font-medium whitespace-nowrap border-r"
                                    >
                                        <div
                                            class="inline px-3 py-1 font-normal rounded-full"
                                        >
                                            <br />
                                            วันที่ 1 สิงหาคม – 20 ธันวาคม 2567
                                        </div>
                                    </td>                               
                                    <td
                                        class="px-3 py-3 text-xs font-medium whitespace-nowrap border-r"
                                    >
                                        <div
                                            class="inline px-3 py-1 font-normal rounded-full"
                                        >
                                            <br />
                                            วันที่ 1 สิงหาคม – 15 พฤศจิกายน 2567
                                        </div>
                                    </td>
                                    <td
                                        class="px-3 py-3 text-xs font-medium whitespace-nowrap border-r text-center"
                                    >
                                        <div
                                            class="inline px-3 py-1 font-normal rounded-full"
                                        >
                                            <font class="text-blue-400"
                                                >( ช่วงที่ 1 )</font
                                            ><br />
                                            วันที่ 1 ตุลาคม – 15 ธันวาคม 2567
                                        </div>
                                    </td>
                                    <td
                                        class="px-3 py-3 text-xs font-medium whitespace-nowrap border-r text-center"
                                    >
                                        <div
                                            class="inline px-3 py-1 font-normal rounded-full"
                                        >
                                            <font class="text-blue-400"
                                                >( ช่วงที่ 2 )</font
                                            ><br />
                                            วันที่ 16-20 ธันวาคม 2567
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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
                                class="w-5 h-5 mx-3 text-gray-400"
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
                            class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                            v-model="this.data.search"
                        />

                        <div
                            class="p-2 ml-1 rounded-lg cursor-pointer bg-blue-700 text-white text-sm hover:bg-blue-800"
                            @click="getSearch()"
                        >
                            ค้นหา
                        </div>
                    </div>
                </div>

                <transition name="fade" mode="out-in">
                    <div
                        class="flex pt-1 items-end justify-end text-red-600"
                        v-if="isShowAlert"
                    >
                        ** กรุณาใส่ข้อมูลที่ต้องการสืบค้น
                    </div>
                </transition>

                <div class="flex flex-col mt-6">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div
                            class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8"
                        >
                            <div class="overflow-hidden border border-gray-200">
                                <table
                                    class="min-w-full divide-y divide-gray-200"
                                >
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th
                                                scope="col"
                                                class="py-2 px-4 text-sm font-normal text-gray-500 border-r"
                                            >
                                                <span>#</span>
                                            </th>

                                            <th
                                                scope="col"
                                                class="py-2 px-4 text-sm font-normal text-gray-500 border-r"
                                            >
                                                <span>ชื่อ-นามสกุล</span>
                                            </th>

                                            <th
                                                scope="col"
                                                class="px-12 py-2 text-sm font-normal text-gray-500 border-r"
                                            >
                                                ตำแหน่ง
                                            </th>

                                            <th
                                                scope="col"
                                                class="px-4 py-2 text-sm font-normal text-gray-500 border-r"
                                            >
                                                มหาวิทยาลัย
                                            </th>

                                            <th
                                                scope="col"
                                                class="px-4 py-2 text-sm font-normal text-gray-500 border-r"
                                            >
                                                หน่วยงาน
                                            </th>

                                            <th
                                                scope="col"
                                                class="px-4 py-2 text-sm font-normal text-gray-500 border-r"
                                            >
                                                ประเภท
                                            </th>

                                            <th
                                                scope="col"
                                                class="px-4 py-2 text-sm font-normal text-gray-500 border-r"
                                                colspan="3"
                                            >
                                                สถานะการชำระเงิน
                                            </th>

                                            <th
                                                scope="col"
                                                class="px-4 py-2 text-sm font-normal text-gray-500"
                                            >
                                                ชำระค่าลงทะเบียน
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-gray-200"
                                    >
                                        <transition-group
                                            name="fade"
                                            mode="out-in"
                                        >
                                            <tr
                                                v-for="(
                                                    member, index
                                                ) in memList.data"
                                                :key="index"
                                                v-show="isShowTable"
                                            >
                                                <td
                                                    class="px-4 py-4 text-sm font-medium whitespace-nowrap border-r"
                                                >
                                                    <div
                                                        class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                    >
                                                        {{ member.id }}
                                                    </div>
                                                </td>
                                                <td
                                                    class="px-4 py-4 text-sm font-medium whitespace-nowrap border-r"
                                                >
                                                    <div
                                                        class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                    >
                                                        {{ member.name }}
                                                        {{ member.surname }}
                                                    </div>
                                                </td>
                                                <td
                                                    class="px-4 py-4 text-sm font-medium whitespace-nowrap border-r"
                                                >
                                                    <div
                                                        class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                    >
                                                        {{ member.pos }}
                                                    </div>
                                                </td>
                                                <td
                                                    class="px-4 py-4 text-sm whitespace-nowrap border-r"
                                                >
                                                    <div
                                                        class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                    >
                                                        {{ member.uni }}
                                                    </div>
                                                </td>
                                                <td
                                                    class="px-4 py-4 text-sm whitespace-nowrap border-r"
                                                >
                                                    <div
                                                        class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                    >
                                                        {{ member.dep }}
                                                    </div>
                                                </td>
                                                <td
                                                    class="px-4 py-4 text-sm whitespace-nowrap border-r text-center"
                                                >
                                                    <div
                                                        class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                    >
                                                        <p
                                                            v-if="
                                                                member.reg ===
                                                                '1'
                                                            "
                                                        >
                                                            ผู้เข้าร่วมประชุม
                                                        </p>
                                                        <p
                                                            class="text-sm"
                                                            v-else
                                                        >
                                                            ผู้เข้าร่วมประชุม<br />และนำเสนอผลงาน
                                                        </p>
                                                    </div>
                                                </td>

                                                <td
                                                    class="px-4 py-4 text-sm whitespace-nowrap"
                                                >
                                                    <div
                                                        class="flex items-center pr-1"
                                                        v-if="
                                                            member.step_1 ===
                                                            '1'
                                                        "
                                                    >
                                                        <span
                                                            class="flex items-center justify-center w-5 h-5 me-2 text-xs border rounded-full shrink-0 text-white bg-blue-600"
                                                        >
                                                            1
                                                        </span>
                                                        <span
                                                            class="text-blue-600"
                                                            >ลงทะเบียน</span
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
                                                    class="px-4 py-4 text-sm whitespace-nowrap"
                                                >
                                                    <div
                                                        class="flex items-center pr-1"
                                                        v-if="
                                                            member.step_2 ===
                                                            null
                                                        "
                                                    ></div>

                                                    <div
                                                        class="flex items-center pr-1"
                                                        v-else
                                                    >
                                                        <span
                                                            class="flex items-center justify-center w-5 h-5 me-2 text-xs border rounded-full shrink-0"
                                                            :class="
                                                                member.step_2 ===
                                                                '0'
                                                                    ? 'bg-gray-200'
                                                                    : 'text-white bg-green-600'
                                                            "
                                                        >
                                                            2
                                                        </span>
                                                        <span
                                                            :class="
                                                                member.step_2 ===
                                                                '0'
                                                                    ? 'text-gray-600'
                                                                    : 'text-green-600'
                                                            "
                                                            >ชำระค่าลงทะเบียน</span
                                                        >
                                                        <svg
                                                            class="w-3 h-3 ms-2 sm:ms-1 text-gray-400"
                                                            :class="
                                                                member.step_2 ===
                                                                '0'
                                                                    ? 'text-gray-400'
                                                                    : 'text-green-600'
                                                            "
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
                                                    <div
                                                        class="flex items-center"
                                                        v-if="
                                                            member.step_3 ===
                                                            null
                                                        "
                                                    ></div>

                                                    <div
                                                        class="flex items-center"
                                                        v-else
                                                    >
                                                        <span
                                                            class="flex items-center justify-center w-5 h-5 me-2 text-xs border rounded-full shrink-0 text-white"
                                                            :class="
                                                                member.step_3 ===
                                                                '0'
                                                                    ? 'bg-orange-400'
                                                                    : 'text-white bg-green-600'
                                                            "
                                                        >
                                                            3
                                                        </span>
                                                        <span
                                                            :class="
                                                                member.step_3 ===
                                                                '0'
                                                                    ? 'text-orange-400'
                                                                    : 'text-green-600'
                                                            "
                                                        >
                                                            <p
                                                                v-if="
                                                                    member.step_3 ===
                                                                    '0'
                                                                "
                                                            >
                                                                รอการตรวจสอบ
                                                            </p>
                                                            <p v-else>
                                                                เสร็จสิ้น
                                                            </p>
                                                        </span>
                                                    </div>
                                                </td>

                                                <td
                                                    class="flex justify-center px-4 py-8 text-sm whitespace-nowrap"
                                                >
                                                    <div
                                                        v-if="
                                                            this.chkSystem !== 1
                                                        "
                                                    >
                                                        <button
                                                            class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg border-2 border-dotted hover:bg-gray-100"
                                                            v-if="
                                                                member.step_2 ===
                                                                    '0'
                                                            "
                                                        >
                                                            <box-icon
                                                                name="arrow-to-bottom"
                                                                color="#f87171"
                                                                animation="tada-hover"
                                                                @click="
                                                                    toPayment(
                                                                        member.id
                                                                    )
                                                                "
                                                            ></box-icon>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </transition-group>

                                        <!-- Search -->
                                        <transition-group
                                            name="fade"
                                            mode="out-in"
                                        >
                                            <tr
                                                v-for="(
                                                    member, index
                                                ) in memSearch"
                                                :key="index"
                                                v-show="isShowSearch"
                                            >
                                                <td
                                                    class="px-4 py-4 text-sm font-medium whitespace-nowrap border-r"
                                                >
                                                    <div
                                                        class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                    >
                                                        {{ member.id }}
                                                    </div>
                                                </td>
                                                <td
                                                    class="px-4 py-4 text-sm font-medium whitespace-nowrap border-r"
                                                >
                                                    <div
                                                        class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                    >
                                                        {{ member.name }}
                                                        {{ member.surname }}
                                                    </div>
                                                </td>
                                                <td
                                                    class="px-4 py-4 text-sm font-medium whitespace-nowrap border-r"
                                                >
                                                    <div
                                                        class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                    >
                                                        {{ member.pos }}
                                                    </div>
                                                </td>
                                                <td
                                                    class="px-4 py-4 text-sm whitespace-nowrap border-r"
                                                >
                                                    <div
                                                        class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                    >
                                                        {{ member.uni }}
                                                    </div>
                                                </td>
                                                <td
                                                    class="px-4 py-4 text-sm whitespace-nowrap border-r"
                                                >
                                                    <div
                                                        class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                    >
                                                        {{ member.dep }}
                                                    </div>
                                                </td>
                                                <td
                                                    class="px-4 py-4 text-sm whitespace-nowrap border-r text-center"
                                                >
                                                    <div
                                                        class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                    >
                                                        <p
                                                            v-if="
                                                                member.reg ===
                                                                '1'
                                                            "
                                                        >
                                                            ผู้เข้าร่วมประชุม
                                                        </p>
                                                        <p v-else>
                                                            ผู้เข้าร่วมประชุม<br />และนำเสนอผลงาน
                                                        </p>
                                                    </div>
                                                </td>

                                                <td
                                                    class="px-4 py-4 text-sm whitespace-nowrap"
                                                >
                                                    <div
                                                        class="flex items-center pr-1"
                                                        v-if="
                                                            member.step_1 ===
                                                            '1'
                                                        "
                                                    >
                                                        <span
                                                            class="flex items-center justify-center w-5 h-5 me-2 text-xs border rounded-full shrink-0 text-white bg-blue-600"
                                                        >
                                                            1
                                                        </span>
                                                        <span
                                                            class="text-blue-600"
                                                            >ลงทะเบียน</span
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
                                                    class="px-4 py-4 text-sm whitespace-nowrap"
                                                >
                                                    <div
                                                        class="flex items-center pr-1"
                                                        v-if="
                                                            member.step_2 ===
                                                            null
                                                        "
                                                    ></div>

                                                    <div
                                                        class="flex items-center pr-1"
                                                        v-else
                                                    >
                                                        <span
                                                            class="flex items-center justify-center w-5 h-5 me-2 text-xs border rounded-full shrink-0"
                                                            :class="
                                                                member.step_2 ===
                                                                '0'
                                                                    ? 'bg-gray-200'
                                                                    : 'text-white bg-green-600'
                                                            "
                                                        >
                                                            2
                                                        </span>
                                                        <span
                                                            :class="
                                                                member.step_2 ===
                                                                '0'
                                                                    ? 'text-gray-600'
                                                                    : 'text-green-600'
                                                            "
                                                            >ชำระค่าลงทะเบียน</span
                                                        >
                                                        <svg
                                                            class="w-3 h-3 ms-2 sm:ms-1 text-gray-400"
                                                            :class="
                                                                member.step_2 ===
                                                                '0'
                                                                    ? 'text-gray-400'
                                                                    : 'text-green-600'
                                                            "
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
                                                    <div
                                                        class="flex items-center"
                                                        v-if="
                                                            member.step_3 ===
                                                            null
                                                        "
                                                    ></div>

                                                    <div
                                                        class="flex items-center"
                                                        v-else
                                                    >
                                                        <span
                                                            class="flex items-center justify-center w-5 h-5 me-2 text-xs border rounded-full shrink-0 text-white"
                                                            :class="
                                                                member.step_3 ===
                                                                '0'
                                                                    ? 'bg-orange-400'
                                                                    : 'text-white bg-green-600'
                                                            "
                                                        >
                                                            3
                                                        </span>
                                                        <span
                                                            :class="
                                                                member.step_3 ===
                                                                '0'
                                                                    ? 'text-orange-400'
                                                                    : 'text-green-600'
                                                            "
                                                        >
                                                            <p
                                                                v-if="
                                                                    member.step_3 ===
                                                                    '0'
                                                                "
                                                            >
                                                                รอการตรวจสอบ
                                                            </p>
                                                            <p v-else>
                                                                เสร็จสิ้น
                                                            </p>
                                                        </span>
                                                    </div>
                                                </td>

                                                <!-- check system -->
                                                <td
                                                    class="flex justify-center px-4 py-8 text-sm whitespace-nowrap"
                                                >
                                                    <div
                                                        v-if="
                                                            this.chkSystem !== 1
                                                        "
                                                    >
                                                        <button
                                                            class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg border-2 border-dotted hover:bg-gray-100"
                                                            v-if="
                                                                member.step_2 ===
                                                                    '0'
                                                            "
                                                        >
                                                            <box-icon
                                                                name="arrow-to-bottom"
                                                                color="#f87171"
                                                                animation="tada-hover"
                                                                @click="
                                                                    toPayment(
                                                                        member.id
                                                                    )
                                                                "
                                                            ></box-icon>
                                                        </button>
                                                    </div>
                                                </td>
                                                <!-- End check system -->
                                            </tr>
                                        </transition-group>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="flex justify-end mt-4">
                    <TailwindPagination
                        :data="memList"
                        @pagination-change-page="getMemList"
                        class="bg-blue-50"
                    ></TailwindPagination>
                </div>
            </section>
            <!-- End DataTable-->
        </div>
    </div>
</template>

<script>
import "boxicons";
import { TailwindPagination } from "laravel-vue-pagination";

export default {
    mounted() {
        this.getSystem();
        this.getMemList();
    },
    data() {
        return {
            chkSystem: "",
            showMenu: false,
            isShowTable: true,
            isShowSearch: false,
            memList: [],
            memSearch: [],
            data: {
                search: "",
            },
        };
    },
    methods: {
        getSystem() {
            axios
                .get("/api/getSystem")
                .then((response) => {
                    this.chkSystem = response.data;
                })
                .catch((err) => {});
        },
        isShowMenu() {
            this.showMenu = !this.showMenu;
        },
        toPayment(id) {
            this.$router.push("/payment/" + id);
        },
        getMemList(page = 1) {
            axios
                .get("/api/memlist?page=" + page)
                .then((response) => {
                    this.memList = response.data;
                })
                .catch((err) => {});
        },
        getSearch() {
            if (this.data.search == "") {
                this.isShowTable = true;
                this.isShowSearch = false;
            } else {
                axios
                    .post("/api/search", this.data)
                    .then((response) => {
                        this.memSearch = response.data;
                        this.isShowTable = false;
                        this.isShowSearch = true;
                    })
                    .catch((err) => {});
            }
        },
    },
    components: {
        TailwindPagination,
    },
};
</script>

<style></style>
