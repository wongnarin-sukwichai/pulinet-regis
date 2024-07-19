<template>
    <div class="bg-white">
        <div class="mx-auto max-w-7xl px-6 pt-14 lg:px-8">
            <div class="text-center pt-32 sm:pt-32 lg:pt-32">
                <form @submit.prevent="send()">
                    <div
                        class="mx-auto max-w-2xl rounded-3xl border-2 border-dotted border-gray-200 lg:mx-0 lg:flex lg:max-w-none bg-gray-50"
                    >
                        <div class="p-8 sm:p-10 lg:flex-auto">
                            <h3
                                class="text-2xl font-bold tracking-tight text-gray-900"
                            >
                                แบบฟอร์มลงทะเบียนเข้าร่วม
                            </h3>
                            <p class="mt-2 text-base leading-7">
                                การประชุมวิชาการระดับชาติ PULINET ครั้งที่ 15<br />
                                (The 15th PULINET National Conference – PULINET
                                2025)
                            </p>
                            <div class="mt-10 flex items-center gap-x-4">
                                <h4
                                    class="flex-none text-lg leading-6 text-indigo-600"
                                >
                                    ข้อมูลผู้ลงทะเบียน
                                </h4>
                                <div class="h-px flex-auto bg-gray-400"></div>
                            </div>

                            <fieldset class="mt-6">
                                <div class="flex items-center mr-4">
                                    <input
                                        type="radio"
                                        value="1"
                                        class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300 cursor-pointer"
                                        aria-labelledby="country-option-1"
                                        aria-describedby="country-option-1"
                                        v-model="this.data.reg"
                                    />
                                    <label
                                        for="country-option-1"
                                        class="text-md font-medium text-gray-900 ml-2 block"
                                    >
                                        ผู้เข้าร่วมประชุม
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        type="radio"
                                        value="2"
                                        class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300 cursor-pointer"
                                        aria-labelledby="country-option-2"
                                        aria-describedby="country-option-2"
                                        v-model="this.data.reg"
                                    />
                                    <label
                                        for="country-option-2"
                                        class="text-md font-medium text-gray-900 ml-2 block"
                                    >
                                        ผู้เข้าร่วมประชุมและนำเสนอผลงาน
                                    </label>
                                </div>
                            </fieldset>

                            <div class="grid gap-6 mt-6 md:grid-cols-5">
                                <div>
                                    <label
                                        for="company"
                                        class="block text-md mb-2 text-left"
                                        ><font class="text-red-400">** </font
                                        >คำนำหน้า</label
                                    >
                                    <input
                                        type="text"
                                        class="w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-1 focus:border-sky-500 block p-2.5"
                                        required
                                        v-model="this.data.intro"
                                    />
                                </div>

                                <div class="col-span-2">
                                    <label
                                        for="company"
                                        class="block text-md mb-2 text-left"
                                        ><font class="text-red-400">** </font
                                        >ชื่อ</label
                                    >
                                    <input
                                        type="text"
                                        class="w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-1 focus:border-sky-500 block p-2.5"
                                        required
                                        v-model="this.data.name"
                                    />
                                </div>

                                <div class="col-span-2">
                                    <label
                                        for="company"
                                        class="block text-md mb-2 text-left"
                                        ><font class="text-red-400">** </font
                                        >นามสกุล</label
                                    >
                                    <input
                                        type="text"
                                        class="w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-1 focus:border-sky-500 block p-2.5"
                                        required
                                        v-model="this.data.surname"
                                    />
                                </div>
                            </div>

                            <div class="grid gap-6 mt-6 md:grid-cols-3">
                                <div>
                                    <label
                                        for="company"
                                        class="block text-md mb-2 text-left"
                                        >ตำแหน่ง</label
                                    >
                                    <input
                                        type="text"
                                        class="w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-1 focus:border-sky-500 block p-2.5"                                       
                                        v-model="this.data.pos"
                                    />
                                </div>

                                <div>
                                    <label
                                        for="company"
                                        class="block text-md mb-2 text-left"
                                        ><font class="text-red-400">** </font
                                        >อีเมล</label
                                    >
                                    <input
                                        type="email"
                                        class="w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-1 focus:border-sky-500 block p-2.5"
                                        required
                                        v-model="this.data.email"
                                    />
                                </div>

                                <div>
                                    <label
                                        for="company"
                                        class="block text-md mb-2 text-left"
                                        >เบอร์โทรศัพท์</label
                                    >
                                    <input
                                        type="text"
                                        class="w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-1 focus:border-sky-500 block p-2.5"
                                        v-model="this.data.tel"
                                    />
                                </div>
                            </div>

                            <fieldset class="mt-6">
                                <div class="flex items-center mr-4">
                                    <input
                                        type="radio"
                                        value="1"
                                        class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300 cursor-pointer"
                                        aria-labelledby="country-option-1"
                                        aria-describedby="country-option-1"
                                        v-model="this.data.member"
                                    />
                                    <label
                                        class="text-gray-900 ml-2 block sm:text-md md:text-md lg:text-md"
                                    >
                                        สมาชิก PULINET/PULINET PLUS
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        type="radio"
                                        value="2"
                                        class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300 cursor-pointer"
                                        aria-labelledby="country-option-2"
                                        aria-describedby="country-option-2"
                                        v-model="this.data.member"
                                    />
                                    <label
                                        class="text-md text-gray-900 ml-2 block"
                                    >
                                        ไม่ใช่สมาชิก PULINET/PULINET PLUS
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        type="radio"
                                        value="3"
                                        class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300 cursor-pointer"
                                        aria-labelledby="country-option-2"
                                        aria-describedby="country-option-2"
                                        v-model="this.data.member"
                                    />
                                    <label
                                        class="text-md text-gray-900 ml-2 block"
                                    >
                                        นิสิต/นักศึกษา
                                    </label>
                                </div>
                            </fieldset>

                            <div class="grid md:grid-cols-3 gap-6 mt-6">
                                <transition name="fade" mode="out-in">
                                    <div v-if="this.data.member === ''">
                                        <label
                                            for="company"
                                            class="block mb-2 text-md text-left"
                                            ><font class="text-red-400"
                                                >** </font
                                            >มหาวิทยาลัย</label
                                        >
                                        <input
                                            type="text"
                                            class="w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-1 focus:border-sky-500 block p-2.5"
                                            disabled
                                        />
                                    </div>

                                    <div
                                        v-else-if="this.data.member === '1'"
                                        class="relative"
                                    >
                                        <label
                                            for="company"
                                            class="block mb-2 text-md text-left"
                                            ><font class="text-red-400"
                                                >** </font
                                            >มหาวิทยาลัย</label
                                        >
                                        <select
                                            class="text-sm p-3 cursor-pointer block appearance-none w-full bg-white border border-gray-200 text-gray-700 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-sky-500"
                                            required
                                            v-model="this.data.uni"
                                        >
                                            <option disabled value="">
                                                กรุณาเลือก...
                                            </option>
                                            <option
                                                v-for="(uni, index) in uniList"
                                                :key="index"
                                                :value="uni.uni_title"
                                            >
                                                {{ uni.uni_title }}
                                            </option>
                                        </select>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 mt-8 text-gray-700"
                                        >
                                            <svg
                                                class="fill-current h- w-4"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20"
                                            >
                                                <path
                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                                />
                                            </svg>
                                        </div>
                                    </div>

                                    <div v-else>
                                        <label
                                            for="company"
                                            class="block mb-2 text-md text-left"
                                            ><font class="text-red-400"
                                                >** </font
                                            >มหาวิทยาลัย</label
                                        >
                                        <input
                                            type="text"
                                            class="w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-1 focus:border-sky-500 block p-2.5"
                                            required
                                            v-model="this.data.uni"
                                        />
                                    </div>
                                </transition>

                                <div>
                                    <label
                                        for="company"
                                        class="block mb-2 text-md text-left"
                                        ><font class="text-red-400">** </font
                                        >คณะ/หน่วยงาน</label
                                    >
                                    <input
                                        type="text"
                                        class="w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-1 focus:border-sky-500 block p-2.5"
                                        required
                                        v-model="this.data.dep"
                                    />
                                </div>

                                <div>
                                    <label
                                        for="company"
                                        class="block text-md mb-2 text-left"
                                        >สาขา</label
                                    >
                                    <input
                                        type="text"
                                        class="w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-1 focus:border-sky-500 block p-2.5"
                                        v-model="this.data.branch"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Card -->

                    <div
                        class="mx-auto max-w-2xl rounded-3xl border-2 border-dotted border-gray-200 lg:mx-0 lg:flex lg:max-w-none mt-6 bg-gray-50"
                    >
                        <div class="p-8 lg:flex-auto">
                            <label
                                for="company"
                                class="block text-md text-left"
                            >
                                <p class="font-semibold text-lg">
                                    <font class="text-red-400">** </font
                                    >การเข้าร่วมงานเลี้ยงรับรอง
                                </p>
                                <p class="text-sm text-gray-600">
                                    (วันที่ 10 มกราคม 2566 เวลา 18.30 – 21.00
                                    น.)
                                </p>
                            </label>

                            <fieldset class="mt-6">
                                <div class="flex items-center mr-4">
                                    <input
                                        type="radio"
                                        value="1"
                                        class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300 cursor-pointer"
                                        aria-labelledby="country-option-1"
                                        aria-describedby="country-option-1"
                                        v-model="this.data.dinner"
                                    />
                                    <label
                                        for="country-option-1"
                                        class="text-md font-medium text-gray-900 ml-2 block"
                                    >
                                        ประสงค์เข้าร่วม
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        type="radio"
                                        value="2"
                                        class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300 cursor-pointer"
                                        aria-labelledby="country-option-2"
                                        aria-describedby="country-option-2"
                                        v-model="this.data.dinner"
                                    />
                                    <label
                                        for="country-option-2"
                                        class="text-md font-medium text-gray-900 ml-2 block"
                                    >
                                        ไม่ประสงค์เข้าร่วม
                                    </label>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div
                        class="mx-auto max-w-2xl rounded-3xl border-2 border-dotted border-gray-200 lg:mx-0 lg:flex lg:max-w-none mt-6 bg-gray-50"
                    >
                        <div class="p-8 lg:flex-auto">
                            <label
                                for="company"
                                class="block text-md text-left"
                            >
                                <p class="font-semibold text-lg">
                                    <font class="text-red-400">** </font
                                    >การศึกษาดูงานศูนย์บรรณสารฯ
                                </p>
                                <p class="text-sm text-gray-600">
                                    (วันที่ 10 มกราคม 2566 เวลา 18.00-18.30 น.)
                                </p>
                            </label>

                            <fieldset class="mt-6">
                                <div class="flex items-center mr-4">
                                    <input
                                        type="radio"
                                        value="1"
                                        class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300 cursor-pointer"
                                        aria-labelledby="country-option-1"
                                        aria-describedby="country-option-1"
                                        v-model="this.data.tour"
                                    />
                                    <label
                                        for="country-option-1"
                                        class="text-md font-medium text-gray-900 ml-2 block"
                                    >
                                        ประสงค์เข้าร่วม
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        type="radio"
                                        value="2"
                                        class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300 cursor-pointer"
                                        aria-labelledby="country-option-2"
                                        aria-describedby="country-option-2"
                                        v-model="this.data.tour"
                                    />
                                    <label
                                        for="country-option-2"
                                        class="text-md font-medium text-gray-900 ml-2 block"
                                    >
                                        ไม่ประสงค์เข้าร่วม
                                    </label>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div
                        class="mx-auto max-w-2xl rounded-3xl border-2 border-dotted border-gray-200 lg:mx-0 lg:flex lg:max-w-none mt-6 bg-gray-50"
                    >
                        <div class="p-8 lg:flex-auto">
                            <label
                                for="company"
                                class="block text-md text-left"
                            >
                                <p class="font-semibold text-lg">
                                    <font class="text-red-400">** </font>อาหาร
                                </p>
                            </label>

                            <fieldset class="mt-2">
                                <div class="flex items-center mr-4">
                                    <input
                                        type="radio"
                                        value="1"
                                        class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300 cursor-pointer"
                                        aria-labelledby="country-option-1"
                                        aria-describedby="country-option-1"
                                        v-model="this.data.food"
                                    />
                                    <label
                                        for="country-option-1"
                                        class="text-md font-medium text-gray-900 ml-2 block"
                                    >
                                        อาหารทั่วไป
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        type="radio"
                                        value="2"
                                        class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300 cursor-pointer"
                                        aria-labelledby="country-option-2"
                                        aria-describedby="country-option-2"
                                        v-model="this.data.food"
                                    />
                                    <label
                                        for="country-option-2"
                                        class="text-md font-medium text-gray-900 ml-2 block"
                                    >
                                        อาหารอิสลาม
                                    </label>
                                </div>

                                <div class="flex items-center mr-4">
                                    <input
                                        type="radio"
                                        value="3"
                                        class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300 cursor-pointer"
                                        aria-labelledby="country-option-3"
                                        aria-describedby="country-option-3"
                                        v-model="this.data.food"
                                    />
                                    <label
                                        for="country-option-3"
                                        class="text-md font-medium text-gray-900 ml-2 block"
                                    >
                                        อาหารมังสวิรัติ
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        type="radio"
                                        value="4"
                                        class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300 cursor-pointer"
                                        aria-labelledby="country-option-4"
                                        aria-describedby="country-option-4"
                                        v-model="this.data.food"
                                    />
                                    <label
                                        for="country-option-4"
                                        class="text-md font-medium text-gray-900 ml-2 block"
                                    >
                                        อื่นๆ
                                    </label>
                                </div>
                            </fieldset>

                            <transition name="fade" mode="out-in">
                                <textarea
                                    type="text"
                                    class="mt-2 rounded-lg form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    v-model="this.data.comment"
                                    v-if="this.data.food === '4'"
                                ></textarea>
                            </transition>
                        </div>
                    </div>

                    <div
                        class="mx-auto max-w-2xl rounded-3xl border-2 border-dotted border-gray-200 lg:mx-0 lg:flex lg:max-w-none mt-6 bg-gray-50"
                    >
                        <div class="p-8 lg:flex-auto">
                            <label
                                for="company"
                                class="block text-md text-left"
                            >
                                <p class="font-semibold text-lg">
                                    <font class="text-red-400">** </font
                                    >การเข้าร่วมทัศนศึกษา (วันที่ 12 มกราคม
                                    2567)
                                </p>
                                <p class="text-sm text-gray-600">
                                    (โปรแกรมไม่รวมอยู่ในค่าลงทะเบียนการเข้าร่วมประชุมฯ
                                    โปรดศึกษารายละเอียดเพิ่มเติม)
                                </p>
                            </label>

                            <fieldset class="mt-6">
                                <div class="flex items-center mr-4">
                                    <input
                                        type="radio"
                                        value="1"
                                        class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300 cursor-pointer"
                                        aria-labelledby="country-option-1"
                                        aria-describedby="country-option-1"
                                        v-model="this.data.trip"
                                    />
                                    <label
                                        for="country-option-1"
                                        class="text-md font-medium text-gray-900 ml-2 block"
                                    >
                                        โปรแกรม A - 1,950 บาท เต็มวัน:
                                        วัดร่องขุ่น - ไร่สิงห์ปาร์ค -
                                        วัดห้วยปลากั้ง - วัดร่องเสือเต้น
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        type="radio"
                                        value="2"
                                        class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300 cursor-pointer"
                                        aria-labelledby="country-option-2"
                                        aria-describedby="country-option-2"
                                        v-model="this.data.trip"
                                    />
                                    <label
                                        for="country-option-2"
                                        class="text-md font-medium text-gray-900 ml-2 block"
                                    >
                                        โปรแกรม B - 1,950 บาท เต็มวัน:
                                        ไร่ชาฉุยฟง - ขุนน้ำนางนอน,ถ้ำหลวง -
                                        ตลาดดอยเวา - ร้านของฝาก
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        type="radio"
                                        value="3"
                                        class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300 cursor-pointer"
                                        aria-labelledby="country-option-3"
                                        aria-describedby="country-option-3"
                                        v-model="this.data.trip"
                                    />
                                    <label
                                        for="country-option-3"
                                        class="text-md font-medium text-gray-900 ml-2 block"
                                    >
                                        ไม่ประสงค์เข้าร่วม
                                    </label>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <transition name="fade" mode="out-in">
                        <div v-if="textAlert" class="text-red-400 mt-4">
                            ** กรุณากรอกข้อมูลให้ครบถ้วน **
                        </div>
                    </transition>

                    <div class="grid grid-cols-2">
                        <div>
                            <router-link to="intro">
                                <button
                                    class="flex mt-4 rounded-xl border px-5 py-3 text-base font-medium transition duration-200 hover:shadow-lg hover:bg-gray-50"
                                >
                                    กลับหน้าหลัก
                                </button>
                            </router-link>
                        </div>
                        <div class="flex justify-end">
                            <button
                                type="submit"
                                class="mt-4 rounded-xl bg-gradient-to-br from-[#6025F5] to-[#FF5555] px-5 py-3 text-base font-medium text-white transition duration-200 hover:shadow-lg hover:shadow-[#6025F5]/50"
                            >
                                ยืนยันข้อมูล
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import Swal from "sweetalert2";

export default {
    mounted() {
        this.getUniList();
    },
    data() {
        return {
            isShowFood: false,
            data: {
                reg: "",
                intro: "",
                name: "",
                surname: "",
                pos: "",
                email: "",
                tel: "",
                member: "",
                uni: "",
                dep: "",
                branch: "",
                dinner: "",
                tour: "",
                food: "",
                comment: "",
                trip: "",
            },
            uniList: "",
            textAlert: false,
        };
    },
    methods: {
        getUniList() {
            axios
                .get("/api/unilist")
                .then((response) => {
                    this.uniList = response.data;
                    // console.log(this.uniList);
                })
                .catch((err) => {});
        },
        async send() {
            this.textAlert = false;
            if (
                this.data.reg == '' ||
                this.data.member == '' ||
                this.data.dinner == '' ||
                this.data.tour == '' ||
                this.data.food == '' ||
                this.data.trip == ''
            ) {
                this.textAlert = true;
            } else {
                await axios
                    .post("/api/regis", this.data)
                    .then((response) => {
                        Swal.fire({
                            position: "center",
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
    },
    computed: {},
};
</script>
