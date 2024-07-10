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
                            class="mt-8 grid grid-cols-1 gap-2 text-sm leading-6 text-gray-600 sm:grid-cols-2 sm:gap-2"
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
                                สแกน QR Code เพื่อชำระเงิน
                            </li>
                            <li class="flex gap-x-3"></li>
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
                            <li class="flex gap-x-3"></li>
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
                                    QR CODE Payment
                                </p>
                                <span
                                    class="mt-6 flex items-baseline justify-center gap-x-2"
                                >
                                    <img :src="qr" />
                                </span>
                                <div
                                    class="grid grid-cols-2 border-2 border-dotted rounded-lg py-2 px-4 mt-6 text-left text-md text-gray-500"
                                >
                                    <p>Ref. 1</p>
                                    <p class="text-right">2001010290</p>
                                    <p>Ref. 2</p>
                                    <p class="text-right">101</p>
                                    <p>จำนวนเงิน</p>
                                    <p class="text-right">2,000 บาท</p>
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
                        <font class="text-red-400">**</font> อัตราค่าบริการ
                    </p>
                    <br />
                    <div class="px-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
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
                                                colspan="2"
                                            >
                                                <p>ชำระเงินระหว่างวันที่</p>
                                                <p>
                                                    1 ตุลาคม - 30 พฤศจิกายน 2566
                                                </p>
                                            </th>
                                            <th
                                                scope="col"
                                                class="py-3.5 px-4 text-sm font-normal text-gray-800"
                                                colspan="2"
                                            >
                                                <p>ชำระเงินระหว่างวันที่</p>
                                                <p>1 - 15 ธันวาคม 2566</p>
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
                                                    สมาชิก<br />
                                                    PULINET/PULINET PLUS
                                                </div>
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm font-medium whitespace-nowrap border-r"
                                            >
                                                <div
                                                    class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                >
                                                    ไม่ใช่สมาชิก<br />
                                                    PULINET/PULINET PLUS
                                                </div>
                                            </td>
                                            <td
                                                class="px-12 py-4 text-sm font-medium whitespace-nowrap border-r"
                                            >
                                                <div
                                                    class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                >
                                                    สมาชิก<br />
                                                    PULINET/PULINET PLUS
                                                </div>
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm whitespace-nowrap"
                                            >
                                                <div
                                                    class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                >
                                                    ไม่ใช่สมาชิก<br />
                                                    PULINET/PULINET PLUS
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
                                                        2,500 บาท
                                                    </h2>
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
                                                class="px-4 py-4 text-sm whitespace-nowrap"
                                            >
                                                <div
                                                    class="inline px-3 py-1 text-sm font-normal rounded-full"
                                                >
                                                    3,500 บาท
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
                        <div class="pb-3">
                            <div class="bg-gray-50 px-4 py-3 sm:px-6">
                                แจ้งการชำระเงิน
                            </div>
                        </div>
                        <br />
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
                                        ออกใบเสร็จในนาม :</label
                                    >
                                    <input
                                        type="text"
                                        class="mt-2 form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        required
                                        v-model="this.data.name"
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
                                        หน่วยงาน :</label
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
                                        ที่อยู่สำหรับออกใบเสร็จ :</label
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

                        <div class="bg-white px-4 pb-4">
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
                        </div>

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
                                        แนบสลิป</label
                                    >
                                    <label
                                        for="uploadFile1"
                                        class="bg-white text-gray-500 font-semibold text-base rounded max-w-md h-auto p-4 flex flex-col items-center justify-center cursor-pointer border-2 border-gray-300 border-dotted mx-auto"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-8 mb-2 fill-gray-500"
                                            viewBox="0 0 32 32"
                                        >
                                            <path
                                                d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z"
                                                data-original="#000000"
                                            />
                                            <path
                                                d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z"
                                                data-original="#000000"
                                            />
                                        </svg>
                                        <p class="font-semibold">Upload File</p>

                                        <input
                                            type="file"
                                            id="uploadFile1"
                                            class="hidden"
                                        />
                                        <p
                                            class="text-xs font-medium text-gray-400 mt-2"
                                        >
                                            PNG & JPG
                                        </p>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="pt-3">
                            <div
                                class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6"
                            >
                                <button
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
                    </div>
                </div>
            </div>
        </div>
    </transition>
</template>

<script>
export default {
    mounted() {},
    data() {
        return {
            qr: "/img/qr.png",
            isShowModal: false,
            data: {
                name: "",
                dep: "",
                vat: "",
                address: "",
                recieve: "",
                comment: "",
                slip: "",
            },
        };
    },
    methods: {
        showModal() {
            this.isShowModal = !this.isShowModal;
        },
    },
};
</script>
