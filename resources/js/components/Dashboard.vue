<template>
    <!-- DataTable-->
    <section class="container px-4 mx-auto">
        <div class="mt-6 md:flex md:items-center md:justify-between">
            <div class="flex p-2 border-2 border-dotted rounded-lg">
                <div>
                    <box-icon name="notepad" class="pr-2"></box-icon>
                </div>
                <div>
                    : รายชื่อผู้ลงทะเบียนเข้าร่วมการประชุม/นำเสนอผลงานวิชาการ
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
                    class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
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
                                        มหาวิทยาลัย
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
                                class="bg-white divide-y divide-gray-200"
                            >
                                <transition-group name="fade" mode="out-in">
                                    <tr
                                        v-for="(member, index) in memList.data"
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
                                                <p v-if="member.member === '1'">
                                                    ผู้เข้าร่วมประชุม
                                                </p>
                                                <p class="text-sm" v-else>
                                                    ผู้เข้าร่วมประชุม<br />และนำเสนอผลงาน
                                                </p>
                                            </div>
                                        </td>

                                        <td
                                            class="px-4 py-4 text-sm whitespace-nowrap"
                                        >
                                            <div
                                                class="flex items-center pr-1"
                                                v-if="member.step_1 === '1'"
                                            >
                                                <span
                                                    class="flex items-center justify-center w-5 h-5 me-2 text-xs border rounded-full shrink-0 text-white bg-blue-600"
                                                >
                                                    1
                                                </span>
                                                <span class="text-blue-600"
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
                                                v-if="member.step_2 === null"
                                            ></div>

                                            <div
                                                class="flex items-center pr-1"
                                                v-else
                                            >
                                                <span
                                                    class="flex items-center justify-center w-5 h-5 me-2 text-xs border rounded-full shrink-0"
                                                    :class="
                                                        member.step_2 === '0'
                                                            ? 'bg-gray-200'
                                                            : 'text-white bg-green-600'
                                                    "
                                                >
                                                    2
                                                </span>
                                                <span
                                                    :class="
                                                        member.step_2 === '0'
                                                            ? 'text-gray-600'
                                                            : 'text-green-600'
                                                    "
                                                    >ชำระค่าลงทะเบียน</span
                                                >
                                                <svg
                                                    class="w-3 h-3 ms-2 sm:ms-1 text-gray-400"
                                                    :class="
                                                        member.step_2 === '0'
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
                                                v-if="member.step_3 === null"
                                            ></div>

                                            <div
                                                class="flex items-center"
                                                v-else
                                            >
                                                <span
                                                    class="flex items-center justify-center w-5 h-5 me-2 text-xs border rounded-full shrink-0 text-white"
                                                    :class="
                                                        member.step_3 === '0'
                                                            ? 'bg-orange-400'
                                                            : 'text-white bg-green-600'
                                                    "
                                                >
                                                    3
                                                </span>
                                                <span
                                                    :class="
                                                        member.step_3 === '0'
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
                                                    <p v-else>เสร็จสิ้น</p>
                                                </span>
                                            </div>
                                        </td>

                                        <td
                                            class="flex justify-center px-4 py-8 text-sm whitespace-nowrap"
                                        >
                                            <button
                                                class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg border-2 border-dotted hover:bg-gray-100"
                                                @click="toCheck(member.id)"
                                            >
                                                <box-icon
                                                    name="coffee"
                                                    color="#a16207"
                                                    animation="tada-hover"
                                                    v-if="member.step_3 === '0'"
                                                ></box-icon>
                                                <box-icon
                                                    name="check-circle"
                                                    color="#65a30d"
                                                    animation="tada-hover"
                                                    v-else-if="
                                                        member.step_3 === '1'
                                                    "
                                                ></box-icon>
                                            </button>
                                        </td>
                                    </tr>
                                </transition-group>

                                <!-- Search -->
                                <transition-group name="fade" mode="out-in">
                                    <tr
                                        v-for="(member, index) in memSearch"
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
                                                <p v-if="member.member === '1'">
                                                    ผู้เข้าร่วมประชุม
                                                </p>
                                                <p v-else>
                                                    ผู้เข้าร่วมประชุม<br />และนำเสนอผลงาน555
                                                </p>
                                            </div>
                                        </td>

                                        <td
                                            class="px-4 py-4 text-sm whitespace-nowrap"
                                        >
                                            <div
                                                class="flex items-center pr-1"
                                                v-if="member.step_1 === '1'"
                                            >
                                                <span
                                                    class="flex items-center justify-center w-5 h-5 me-2 text-xs border rounded-full shrink-0 text-white bg-blue-600"
                                                >
                                                    1
                                                </span>
                                                <span class="text-blue-600"
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
                                                v-if="member.step_2 === null"
                                            ></div>

                                            <div
                                                class="flex items-center pr-1"
                                                v-else
                                            >
                                                <span
                                                    class="flex items-center justify-center w-5 h-5 me-2 text-xs border rounded-full shrink-0"
                                                    :class="
                                                        member.step_2 === '0'
                                                            ? 'bg-gray-200'
                                                            : 'text-white bg-green-600'
                                                    "
                                                >
                                                    2
                                                </span>
                                                <span
                                                    :class="
                                                        member.step_2 === '0'
                                                            ? 'text-gray-600'
                                                            : 'text-green-600'
                                                    "
                                                    >ชำระค่าลงทะเบียน</span
                                                >
                                                <svg
                                                    class="w-3 h-3 ms-2 sm:ms-1 text-gray-400"
                                                    :class="
                                                        member.step_2 === '0'
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
                                                v-if="member.step_3 === null"
                                            ></div>

                                            <div
                                                class="flex items-center"
                                                v-else
                                            >
                                                <span
                                                    class="flex items-center justify-center w-5 h-5 me-2 text-xs border rounded-full shrink-0 text-white"
                                                    :class="
                                                        member.step_3 === '0'
                                                            ? 'bg-orange-400'
                                                            : 'text-white bg-green-600'
                                                    "
                                                >
                                                    3
                                                </span>
                                                <span
                                                    :class="
                                                        member.step_3 === '0'
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
                                                    <p v-else>เสร็จสิ้น</p>
                                                </span>
                                            </div>
                                        </td>

                                        <!-- check system -->
                                        <td
                                            class="flex justify-center px-4 py-8 text-sm whitespace-nowrap"
                                        >
                                            <button
                                                class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg border-2 border-dotted hover:bg-gray-100"
                                                @click="toCheck(member.id)"
                                            >
                                                <box-icon
                                                    name="coffee"
                                                    color="#a16207"
                                                    animation="tada-hover"
                                                    v-if="member.step_3 === '0'"
                                                ></box-icon>
                                                <box-icon
                                                    name="check-circle"
                                                    color="#65a30d"
                                                    animation="tada-hover"
                                                    v-else-if="
                                                        member.step_3 === '1'
                                                    "
                                                ></box-icon>
                                            </button>
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
</template>

<script>
import "boxicons";
import { TailwindPagination } from "laravel-vue-pagination";

export default {
    mounted() {
        this.getMemList();
    },
    data() {
        return {
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
        getMemList(page = 1) {
            axios
                .get("/api/member?page=" + page)
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
        toCheck(id) {
            this.$router.push("/detail/" + id);
        },
    },
    components: {
        TailwindPagination,
    },
};
</script>
