<template>
    <div class="bg-white">
        <div class="mx-auto max-w-7xl px-6 pt-14 lg:px-8">
            <div class="text-center pt-32 sm:pt-32 lg:pt-32">
                <div
                    class="mx-auto max-w-2xl rounded-3xl border-2 border-dotted border-gray-200 lg:mx-0 lg:flex lg:max-w-none"
                >
                    <div class="p-8 sm:p-10 lg:flex-auto">
                        <h3
                            class="text-2xl font-bold tracking-tight text-gray-900"
                        >
                            ชำระเงินค่าลงทะเบียน
                        </h3>
                        <p class="mt-6 text-base leading-7 text-gray-600">
                            การประชุมวิชาการระดับชาติ PULINET ครั้งที่ 15<br />
                            (The 15th PULINET National Conference – PULINET
                            2025)
                        </p>
                        <div class="mt-10 flex items-center gap-x-4">
                            <h4
                                class="flex-none text-sm leading-6 text-indigo-600"
                            >
                                โปรดดำเนินการ
                            </h4>
                            <div class="h-px flex-auto bg-gray-100"></div>
                        </div>
                        <ul
                            role="list"
                            class="mt-8 gap-2 text-sm leading-6 text-gray-600 sm:grid-cols-2 sm:gap-2"
                        >
                            <li class="flex gap-x-3">
                                <svg
                                    class="h-6 w-5 flex-none text-indigo-600"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                                ชำระเงินผ่านหมายเลขบัญชี
                            </li>
                            <li class="flex gap-x-3">
                                <svg
                                    class="h-6 w-5 flex-none text-indigo-600"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                                หลังจากชำระเงินแล้ว คลิกที่ "แจ้งการชำระเงิน"
                            </li>
                            <li class="flex gap-x-3">
                                <svg
                                    class="h-6 w-5 flex-none text-indigo-600"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                                ตรวจสอบข้อมูลก่อนบันทึกข้อมูล
                            </li>
                            <li class="flex gap-x-3">
                                <svg
                                    class="h-6 w-5 flex-none text-indigo-600"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                                กรณีข้อมูลผิดพลาดหลังบันทึกข้อมูล
                                กรุณาติดต่อเจ้าหน้าที่
                                <a
                                    href="https://www.facebook.com/librarymsu"
                                    target="_blank"
                                    class="text-blue-600"
                                >
                                    Click...
                                </a>
                            </li>
                        </ul>
                        <button
                            class="mt-8 rounded-xl bg-gradient-to-br from-[#6025F5] to-[#FF5555] px-5 py-3 text-base font-medium text-white transition duration-200 hover:shadow-lg hover:shadow-[#6025F5]/50"
                            @click="showModal()"
                        >
                            แจ้งการชำระเงิน
                        </button>
                    </div>
                    <div
                        class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0"
                    >
                        <div
                            class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16"
                        >
                            <div class="mx-auto max-w-xs px-8">
                                <p
                                    class="bg-gradient-to-r from-blue-800 to-indigo-900 p-2 text-white rounded-lg"
                                >
                                    Payment
                                </p>
                                <div
                                    class="grid grid-cols-3 py-2 mt-6 text-gray-500 border-2 border-dotted rounded-lg"
                                >
                                    <img :src="scb" class="w-20" />
                                    <div class="items-center py-5 px-2 text-right col-span-2">
                                        <p class="text-sm">มหาวิทยาลัยมหาสารคาม</p>
                                        <p class="mt-1 text-md text-purple-700 font-semibold">408-931691-9</p>
                                    </div>
                                </div>
                                <div
                                    class="text-right border-2 border-dotted rounded-lg py-2 px-4 mt-6 text-md text-gray-500"
                                >
                                    <p>{{ this.data.title }}</p>
                                </div>
                                <div
                                    class="grid grid-cols-2 border-2 border-dotted rounded-lg py-2 px-4 mt-2 text-left text-md text-gray-500"
                                >
                                    <p class="text-sm">ค่าลงทะเบียน</p>
                                    <p class="text-right">
                                        {{ this.chkPrice(this.typeMem) }} บาท
                                    </p>
                                </div>
                                <div
                                    class="grid grid-cols-3 border-2 border-dotted rounded-lg py-2 px-4 mt-2 text-left text-md text-gray-500"
                                    v-if="this.tour !== 0"
                                >
                                    <p class="col-span-2 text-sm">
                                        เข้าร่วมทัศนศึกษา
                                    </p>
                                    <p class="text-right">
                                        {{ this.data.tourprice }} บาท
                                    </p>
                                </div>
                                <div
                                    class="grid grid-cols-2 border-2 border-dotted rounded-lg py-2 px-4 mt-2 text-left text-md text-gray-500"
                                >
                                    <p class="text-sm">ทั้งหมด</p>
                                    <p
                                        class="text-right"
                                        v-if="this.tour !== 0"
                                    >
                                        {{
                                            formatPrice(
                                                Number(this.data.regprice) +
                                                    Number(this.data.tourprice)
                                            )
                                        }}
                                        บาท
                                    </p>
                                    <p class="text-right" v-else>
                                        {{ this.chkPrice(this.typeMem) }} บาท
                                    </p>
                                </div>
                                <p class="mt-4 text-sm leading-5 text-gray-600">
                                    ชำระผ่าน Mobile Banking ได้ทุกธนาคาร
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Card -->

                <div
                    class="mx-auto mt-4 max-w-2xl rounded-3xl border-2 border-dotted border-gray-200 lg:mx-0 lg:max-w-none"
                >
                    <p class="text-left px-4 pt-4">
                        <font class="text-red-400">**</font> อัตราค่าลงทะเบียน
                    </p>
                    <br />
                    <div class="px-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div
                            class="inline-block min-w-full pb-4 align-middle md:px-6 lg:px-8"
                        >
                            <div
                                class="overflow-hidden border border-gray-200 md:rounded-lg"
                            >
                                <table
                                    class="min-w-full divide-y divide-gray-200"
                                >
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th
                                                scope="col"
                                                class="py-3.5 px-4 text-sm font-normal text-gray-800 border-r"
                                                colspan="3"
                                            >
                                                <p>
                                                    ชำระค่าลงทะเบียน (ช่วงที่ 1)
                                                </p>
                                                <p>
                                                    1 ตุลาคม - 20 ธันวาคม 2567
                                                </p>
                                            </th>
                                            <th
                                                scope="col"
                                                class="py-3.5 px-4 text-sm font-normal text-gray-800"
                                                colspan="3"
                                            >
                                                <p>
                                                    ชำระค่าลงทะเบียน (ช่วงที่ 2)
                                                </p>
                                                <p>21 - 31 ธันวาคม 2567</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-gray-200"
                                    >
                                        <tr class="bg-gray-50">
                                            <td
                                                class="px-4 py-4 text-sm font-medium whitespace-nowrap border-r"
                                            >
                                                <div
                                                    class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                >
                                                    ทั่วไป<br />
                                                    <font class="text-xs"
                                                        >( ไม่ใช่สมาชิก
                                                        PULINET/PULINET PLUS
                                                        )</font
                                                    >
                                                </div>
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm font-medium whitespace-nowrap border-r"
                                            >
                                                <div
                                                    class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                >
                                                    สมาชิก<br />
                                                    <font class="text-xs"
                                                        >PULINET/PULINET
                                                        PLUS</font
                                                    >
                                                </div>
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm font-medium whitespace-nowrap border-r"
                                            >
                                                <div
                                                    class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                >
                                                    นิสิต/นักศึกษา
                                                </div>
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm whitespace-nowrap border-r"
                                            >
                                                <div
                                                    class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                >
                                                    ทั่วไป<br /><font
                                                        class="text-xs"
                                                        >( ไม่ใช่สมาชิก
                                                        PULINET/PULINET PLUS
                                                        )</font
                                                    >
                                                </div>
                                            </td>
                                            <td
                                                class="px-12 py-4 text-sm font-medium whitespace-nowrap border-r"
                                            >
                                                <div
                                                    class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                >
                                                    สมาชิก<br />
                                                    <font class="text-xs"
                                                        >PULINET/PULINET
                                                        PLUS</font
                                                    >
                                                </div>
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm font-medium whitespace-nowrap"
                                            >
                                                <div
                                                    class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                >
                                                    นิสิต/นักศึกษา
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td
                                                class="px-4 py-4 text-sm font-medium whitespace-nowrap border-r"
                                            >
                                                <div>
                                                    <h2
                                                        class="font-medium text-gray-800"
                                                    >
                                                        2,500 บาท
                                                    </h2>
                                                </div>
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm font-medium whitespace-nowrap border-r"
                                            >
                                                <div>
                                                    <h2
                                                        class="font-medium text-gray-800"
                                                    >
                                                        2,000 บาท
                                                    </h2>
                                                </div>
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm font-medium whitespace-nowrap border-r"
                                            >
                                                <div>
                                                    <h2
                                                        class="font-medium text-gray-800"
                                                    >
                                                        600 บาท
                                                    </h2>
                                                </div>
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm whitespace-nowrap border-r"
                                            >
                                                <div
                                                    class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                >
                                                    3,500 บาท
                                                </div>
                                            </td>
                                            <td
                                                class="px-12 py-4 text-sm font-medium whitespace-nowrap border-r"
                                            >
                                                <div
                                                    class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                >
                                                    3,000 บาท
                                                </div>
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm font-medium whitespace-nowrap"
                                            >
                                                <div>
                                                    <h2
                                                        class="font-medium text-gray-800"
                                                    >
                                                        700 บาท
                                                    </h2>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Show -->
    <transition name="fade" mode="out-in">
        <div
            class="relative z-10"
            aria-labelledby="modal-title"
            role="dialog"
            aria-modal="true"
            v-show="isShowModal"
        >
            <div
                class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
            ></div>

            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div
                    class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0"
                >
                    <div
                        class="relative transform overflow-hidden rounded-lg bg-white shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg"
                    >
                        <div
                            class="pt-32 text-white shadow-lg bg-gradient-to-r from-blue-800 to-indigo-900"
                        >
                            <div class="0 px-4 py-3 sm:px-6">
                                แจ้งการชำระเงิน
                            </div>
                        </div>
                        <br /><br />

                        <form @submit.prevent="send()">
                            <div class="bg-white px-4 pb-4">
                                <div class="col-span-3 sm:flex sm:items-start">
                                    <div
                                        class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 sm:mx-0 sm:h-10 sm:w-10"
                                    >
                                        <box-icon
                                            name="user"
                                            color="white"
                                        ></box-icon>
                                    </div>
                                    <div
                                        class="text-center sm:mt-0 sm:ml-4 sm:text-left w-full"
                                    >
                                        <label
                                            id="listbox-label"
                                            class="block text-sm font-medium leading-6 text-gray-900"
                                        >
                                            <font class="text-red-400">** </font
                                            >ออกใบเสร็จในนาม :</label
                                        >
                                        <input
                                            type="text"
                                            class="mt-2 form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                            required
                                            v-model="this.data.title"
                                        />
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white px-4 pb-4">
                                <div class="col-span-3 sm:flex sm:items-start">
                                    <div
                                        class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 sm:mx-0 sm:h-10 sm:w-10"
                                    >
                                        <box-icon
                                            name="building-house"
                                            color="white"
                                        ></box-icon>
                                    </div>
                                    <div
                                        class="mt-0 text-center sm:mt-0 sm:ml-4 sm:text-left w-full"
                                    >
                                        <label
                                            id="listbox-label"
                                            class="block text-sm font-medium leading-6 text-gray-900"
                                        >
                                            <font class="text-red-400">** </font
                                            >หน่วยงาน :</label
                                        >
                                        <input
                                            type="text"
                                            class="mt-2 form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                            required
                                            v-model="this.data.dep"
                                        />
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white px-4 pb-4">
                                <div class="col-span-3 sm:flex sm:items-start">
                                    <div
                                        class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 sm:mx-0 sm:h-10 sm:w-10"
                                    >
                                        <box-icon
                                            name="barcode"
                                            color="white"
                                        ></box-icon>
                                    </div>
                                    <div
                                        class="mt-0 text-center sm:mt-0 sm:ml-4 sm:text-left w-full"
                                    >
                                        <label
                                            id="listbox-label"
                                            class="block text-sm font-medium leading-6 text-gray-900"
                                        >
                                            เลขกำกับภาษี (ถ้ามี)* :</label
                                        >
                                        <input
                                            type="text"
                                            class="mt-2 form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                            v-model="this.data.vat"
                                        />
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white px-4 pb-4">
                                <div class="col-span-3 sm:flex sm:items-start">
                                    <div
                                        class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 sm:mx-0 sm:h-10 sm:w-10"
                                    >
                                        <box-icon
                                            name="pin"
                                            color="white"
                                        ></box-icon>
                                    </div>
                                    <div
                                        class="mt-0 text-center sm:mt-0 sm:ml-4 sm:text-left w-full"
                                    >
                                        <label
                                            id="listbox-label"
                                            class="block text-sm font-medium leading-6 text-gray-900"
                                        >
                                            <font class="text-red-400">** </font
                                            >ที่อยู่สำหรับออกใบเสร็จ :</label
                                        >
                                        <textarea
                                            type="text"
                                            class="mt-2 form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                            required
                                            v-model="this.data.address"
                                        ></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="bg-white px-4 pb-4">
                            <div class="col-span-3 sm:flex sm:items-start">
                                <div
                                    class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 sm:mx-0 sm:h-10 sm:w-10"
                                >
                                    <box-icon
                                        name="mail-send"
                                        color="white"
                                    ></box-icon>
                                </div>
                                <div
                                    class="mt-0 text-center sm:mt-0 sm:ml-4 sm:text-left w-full"
                                >
                                    <label
                                        id="listbox-label"
                                        class="block text-sm font-medium leading-6 text-gray-900"
                                    >
                                        การรับใบเสร็จ :</label
                                    >
                                    <fieldset class="mt-2">
                                        <div class="flex items-center mr-4">
                                            <input
                                                type="radio"
                                                value="1"
                                                class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300 cursor-pointer"
                                                aria-labelledby="country-option-1"
                                                aria-describedby="country-option-1"
                                                v-model="this.data.recieve"
                                            />
                                            <label
                                                for="country-option-1"
                                                class="text-sm font-medium text-gray-900 ml-2 block"
                                            >
                                                รับใบเสร็จหน้างาน (วันที่ 10
                                                มกราคม 2567)
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input
                                                type="radio"
                                                value="2"
                                                class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300 cursor-pointer"
                                                aria-labelledby="country-option-2"
                                                aria-describedby="country-option-2"
                                                v-model="this.data.recieve"
                                            />
                                            <label
                                                for="country-option-2"
                                                class="text-sm font-medium text-gray-900 ml-2 block"
                                            >
                                                จัดส่งทางไปรษณีย์
                                            </label>
                                        </div>
                                    </fieldset>
                                    <transition name="fade" mode="out-in">
                                        <textarea
                                            type="text"
                                            class="mt-2 rounded-lg form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                            v-model="this.data.comment"
                                            v-if="this.data.recieve === '2'"
                                        ></textarea>
                                    </transition>
                                </div>
                            </div>
                        </div> -->

                            <div class="bg-white px-4 pb-4">
                                <div class="col-span-3 sm:flex sm:items-start">
                                    <div
                                        class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 sm:mx-0 sm:h-10 sm:w-10"
                                    >
                                        <box-icon
                                            name="upload"
                                            color="white"
                                        ></box-icon>
                                    </div>
                                    <div
                                        class="mt-0 text-center sm:mt-0 sm:ml-4 sm:text-left w-full"
                                    >
                                        <label
                                            id="listbox-label"
                                            class="block text-sm font-medium leading-6 text-gray-900"
                                        >
                                            <font class="text-red-400">** </font
                                            >แนบสลิป</label
                                        >
                                        <div class="flex">
                                            <input
                                                class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-xs font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary mr-2"
                                                ref="fileInput"
                                                type="file"
                                                @input="pickFile"
                                            />
                                            <button
                                                type="button"
                                                class="rounded-md bg-white px-2.5 text-sm text-gray-400 shadow-sm ring-1 ring-inset ring-gray-300 hover:text-gray-500 hover:bg-gray-50"
                                                @click="resetFile()"
                                            >
                                                <box-icon
                                                    name="trash"
                                                    size="xs"
                                                    color="#f87171"
                                                    class=""
                                                ></box-icon>
                                            </button>
                                        </div>
                                        <transition name="fade" mode="out-in">
                                            <div
                                                class="text-red-500 text-sm"
                                                v-show="chkPic === false"
                                            >
                                                ** กรุณาเลือกรูป
                                            </div>
                                        </transition>
                                    </div>
                                </div>
                            </div>

                            <div class="flex px-4 pb-4 justify-center">
                                <transition name="fade" mode="out-in">
                                    <div
                                        v-if="previewImage"
                                        class="imagePreviewWrapper"
                                        :style="{
                                            'background-image': `url(${previewImage})`,
                                        }"
                                        @click="selectImage"
                                    ></div>
                                </transition>
                            </div>

                            <div class="bg-white px-4 pb-4">
                                <div class="col-span-3 sm:flex sm:items-start">
                                    <div
                                        class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 sm:mx-0 sm:h-10 sm:w-10"
                                    >
                                        <box-icon
                                            name="credit-card"
                                            color="white"
                                        ></box-icon>
                                    </div>
                                    <div
                                        class="mt-0 text-center sm:mt-0 sm:ml-4 sm:text-left w-full"
                                    >
                                        <label
                                            id="listbox-label"
                                            class="block text-sm font-medium leading-6 text-gray-900"
                                        >
                                            <font class="text-red-400">** </font
                                            >โอนจากธนาคาร :</label
                                        >
                                        <input
                                            type="text"
                                            class="mt-2 form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                            required
                                            v-model="this.data.bank"
                                        />
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white px-4 pb-4">
                                <div class="col-span-3 sm:flex sm:items-start">
                                    <div
                                        class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 sm:mx-0 sm:h-10 sm:w-10"
                                    >
                                        <box-icon
                                            name="time"
                                            color="white"
                                        ></box-icon>
                                    </div>
                                    <div
                                        class="mt-0 text-center sm:mt-0 sm:ml-4 sm:text-left w-full"
                                    >
                                        <label
                                            id="listbox-label"
                                            class="block text-sm font-medium leading-6 text-gray-900"
                                        >
                                            <font class="text-red-400">** </font
                                            >วันเวลาที่โอน :</label
                                        >
                                        <div class="grid grid-cols-2 gap-2">
                                            <Datepicker
                                                type="text"
                                                class="mt-2 form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                required
                                                v-model="this.data.date"
                                            />
                                            <input
                                                type="text"
                                                class="mt-2 form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                placeholder="08.00"
                                                required
                                                v-model="this.data.time"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white px-4 pb-4">
                                <div class="col-span-3 sm:flex sm:items-start">
                                    <div
                                        class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 sm:mx-0 sm:h-10 sm:w-10"
                                    >
                                        <box-icon
                                            name="bitcoin"
                                            color="white"
                                        ></box-icon>
                                    </div>
                                    <div
                                        class="mt-0 text-center sm:mt-0 sm:ml-4 sm:text-left w-full"
                                    >
                                        <label
                                            id="listbox-label"
                                            class="block text-sm font-medium leading-6 text-gray-900"
                                        >
                                            <font class="text-red-400">** </font
                                            >จำนวนเงินที่โอน :</label
                                        >
                                        <div class="flex">
                                            <input
                                                type="number"
                                                class="mt-2 form-control block w-full lg:w-52 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                required
                                                v-model="this.data.price"
                                            />

                                            <p
                                                class="flex items-center pt-2 text-gray-400 pl-2 text-lg"
                                            >
                                                บาท
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white px-4 pb-4">
                                <div class="col-span-3 sm:flex sm:items-start">
                                    <div
                                        class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 sm:mx-0 sm:h-10 sm:w-10"
                                    >
                                        <box-icon
                                            name="message-rounded-dots"
                                            color="white"
                                        ></box-icon>
                                    </div>
                                    <div
                                        class="mt-0 text-center sm:mt-0 sm:ml-4 sm:text-left w-full"
                                    >
                                        <label
                                            id="listbox-label"
                                            class="block text-sm font-medium leading-6 text-gray-900"
                                        >
                                            รายการอื่นๆ ที่ต้องการให้แสดง
                                            :</label
                                        >
                                        <textarea
                                            type="text"
                                            class="mt-2 form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                            v-model="this.data.comment"
                                        ></textarea>
                                    </div>
                                </div>
                            </div>

                            <div v-if="showAlert">
                                <p class="text-red-600">{{ this.textAlert }}</p>
                            </div>

                            <div class="pt-3">
                                <div
                                    class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6"
                                >
                                    <button
                                        type="submit"
                                        class="inline-flex w-full justify-center rounded-md bg-gradient-to-br from-[#6025F5] to-[#FF5555] px-3 py-2 text-sm text-white sm:ml-3 sm:w-auto hover:shadow-lg hover:shadow-[#6025F5]/50"
                                    >
                                        บันทึก
                                    </button>
                                    <button
                                        type="button"
                                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 sm:mt-0 sm:w-auto hover:shadow-lg hover:bg-gray-50"
                                        @click="showModal()"
                                    >
                                        ออก
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </transition>
</template>

<script>
import "boxicons";
import Datepicker from "vue3-datepicker";
import moment from "moment";
import Swal from "sweetalert2";

export default {
    async mounted() {
        await this.getMember();
        this.getPeriod();
    },
    data() {
        return {
            scb: "/img/scb5.png",
            qr: "/img/qr.png",
            picked: new Date(),
            isShowModal: false,
            previewImage: "",
            file: null,
            chkPic: true,
            showAlert: false,
            textAlert: "",
            data: {
                ref_id: this.$route.params.id,
                title: "",
                dep: "",
                vat: "",
                address: "",
                slip: "",
                bank: "",
                date: "",
                time: "",
                regprice: "",
                tourprice: "",
                price: "",
                comment: "",
            },
            typeMem: "",
            tour: "",
            periodList: "",
            priceMem: "",
            moment: moment,
        };
    },
    methods: {
        async getMember() {
            await axios
                .get("/api/getMember/" + this.$route.params.id)
                .then((response) => {
                    this.data.title =
                        response.data[0].intro +
                        response.data[0].name +
                        " " +
                        response.data[0].surname;
                    this.data.dep = response.data[0].uni;
                    this.typeMem = response.data[0].member;
                    this.tour = response.data[0].tour;
                })
                .catch((err) => {});

            if (this.tour != 0) {
                axios
                    .get("/api/showTour/" + this.tour)
                    .then((response) => {
                        this.data.tourprice = response.data.price;
                    })
                    .catch((err) => {});
            }
        },
        getPeriod() {
            axios
                .get("/api/getPeriod")
                .then((response) => {
                    this.periodList = response.data;
                })
                .catch((err) => {});
        },
        // getTour() {
        //     axios
        //         .get("/api/getTour")
        //         .then((response) => {
        //             this.data.tourpriceList = response.data;
        //         })
        //         .catch((err) => {});
        // },
        showModal() {
            this.isShowModal = !this.isShowModal;
        },
        resetFile() {
            this.$refs.fileInput.value = null; //clear ช่อง choose
            this.previewImage = "";
            this.file = "";
        },
        //image upload and preview methods
        selectImage() {
            this.$refs.fileInput.click();
        },
        pickFile() {
            let input = this.$refs.fileInput;
            this.file = input.files; //เอาไฟล์รูปเข้าตัวแปร file
            //console.log(this.file[0])
            if (this.file && this.file[0]) {
                let reader = new FileReader();
                reader.onload = (e) => {
                    this.previewImage = e.target.result;
                    //this.file = e.target.files[0];
                };
                reader.readAsDataURL(this.file[0]);
                this.$emit("input", this.file[0]);
            }
        },
        chkPrice(id) {
            if (id == 1) {
                this.data.regprice = this.periodList.p_1;
                return this.formatPrice(this.periodList.p_1);
            } else if (id == 2) {
                this.data.regprice = this.periodList.p_2;
                return this.formatPrice(this.periodList.p_2);
            } else {
                this.data.regprice = this.periodList.p_3;
                return this.formatPrice(this.periodList.p_3);
            }
        },
        formatPrice(id) {
            let val = (id / 1).toFixed(0).replace();
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        },
        total(id) {},
        async send() {
            this.showAlert = false;

            if (this.file == null) {
                this.showAlert = true;
                return (this.textAlert = "** กรุณาแนบ Slip การโอน **");
            } else if (this.data.date == "") {
                this.showAlert = true;
                return (this.textAlert = "** กรุณาใส่วันที่โอน **");
            } else {
                this.showAlert = false;

                let formData = new FormData(); //สร้าง FromData เพื่อรองรับข้อมูลประเภท File
                formData.append("file", this.file[0]);
                // console.log(formData);

                await this.$store.dispatch("upload", formData);
                this.data.slip = await this.$store.getters.picName;

                await this.formatDate(this.data.date);

                axios
                    .post("/api/storePayment", this.data)
                    .then((response) => {
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: response.data.message,
                            showConfirmButton: false,
                            timer: 1500,
                        });
                        this.$router.push("/");
                    })
                    .catch((err) => {});
            }
        },
        formatDate(id) {
            this.data.date = moment(id).format("YYYY-MM-DD");
        },
    },
    components: {
        Datepicker,
    },
};
</script>

<style>
.imagePreviewWrapper {
    width: 250px;
    height: 250px;
    display: block;
    cursor: pointer;
    margin: 0 auto;
    background-size: cover;
    background-position: center center;
}

.ck-editor__editable {
    max-height: 400px;
}
</style>
