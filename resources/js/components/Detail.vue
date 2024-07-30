<template>
    <div class="mx-auto max-w-2xl border-2 border-dotted rounded-lg">
        <div class="p-4 sm:p-8 lg:flex-auto text-center">
            <p class="text-xl text-center text-blue-900">View Payment Detail</p>
            <div class="flex justify-center mt-4">
                <img
                    :src="path + this.data.slip"
                    class="w-64 cursor-pointer hover:border-4 hover:border-blue-400"
                    @click="toLink(this.data.slip)"
                />
            </div>
            <div class="grid grid-cols-2 gap-2 py-8">
                <div class="text-right text-blue-900">ชื่อ-นามสกุล :</div>
                <div class="text-left">
                    {{ this.data.name + " " + this.data.surname }}
                </div>
                <div class="text-right text-blue-900">หน่วยงาน :</div>
                <div class="text-left">
                    {{ this.data.uni }}<br />{{ this.data.dep }}
                </div>
                <div class="text-right text-blue-900">โอนจากธนาคาร :</div>
                <div class="text-left">{{ this.data.bank }}</div>
                <div class="text-right text-blue-900">วันเวลาที่โอน :</div>
                <div class="text-left">
                    {{ this.data.date + " : " + this.data.time }} น.
                </div>
                <div class="text-right text-blue-900">อีเมล :</div>
                <div class="text-left">{{ this.data.email }}</div>
                <div class="text-right text-blue-900">โทรศัพท์ :</div>
                <div class="text-left">{{ this.data.tel }}</div>
                <div class="text-right text-blue-900">ค่าลงทะเบียน :</div>
                <div class="text-left">{{ formatPrice(this.data.regprice) }} บาท</div>
                <div class="text-right text-blue-900">เข้าร่วมทัศนศึกษา :</div>
                <div class="text-left">{{ formatPrice(this.data.tourprice) }} บาท</div>
                <div class="text-right text-blue-900">รวมทั้งหมด :</div>
                <div class="text-left">{{ formatPrice(this.data.regprice + this.data.tourprice) }} บาท</div>
            </div>
            <div class="text-gray-400">
                รายการที่ต้องการแสดงบนใบเสร็จ ** Detail of Receipt **
            </div>
            <div class="grid grid-cols-2 gap-2 py-8">
                <div class="text-right text-blue-900">
                    ชื่อ-นามสกุล บนใบเสร็จ :
                </div>
                <div class="text-left">{{ this.data.title }}</div>
                <div class="text-right text-blue-900">ชื่อหน่วยงาน :</div>
                <div class="text-left">{{ this.data.department }}</div>
                <div class="text-right text-blue-900">เลขภาษี :</div>
                <div class="text-left">{{ this.data.vat }}</div>
                <div class="text-right text-blue-900">ที่อยู่บนใบเสร็จ :</div>
                <div class="text-left">{{ this.data.address }}</div>
                <div class="text-right text-blue-900">
                    รายการอื่นๆ ที่ต้องการให้แสดง :
                </div>
                <div class="text-left">{{ this.data.comment }}</div>
                <div class="text-right text-blue-900">จำนวนเงิน :</div>
                <div class="text-left">
                    {{ formatPrice(this.data.price) }} บาท
                </div>
            </div>

            <button
                class="rounded-xl bg-gradient-to-br from-[#6025F5] to-[#FF5555] px-5 py-3 text-base font-medium text-white transition duration-200 hover:shadow-lg hover:shadow-[#6025F5]/50"
                v-if="this.data.step_3 === '0'"
                @click="send()"
            >
                ยืนยันข้อมูล
            </button>
        </div>
    </div>
</template>

<script>
import Swal from "sweetalert2";

export default {
    mounted() {
        this.getPayment();
    },
    data() {
        return {
            path: "/slips/thumbnails/",
            isShowSubmit: false,
            data: "",
        };
    },
    methods: {
        getPayment() {
            axios
                .get("/api/payment/" + this.$route.params.id)
                .then((response) => {
                    this.data = response.data[0];
                    // console.log(this.data.step_3);
                })
                .catch((err) => {});
        },
        toLink(id) {
            window.open("/slips/" + id, "_blank");
        },
        formatPrice(id) {
            let val = (id / 1).toFixed(0).replace();
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        },
        send() {
            Swal.fire({
                title: "ยืนยันข้อมูล?",
                text: "ต้องการยืนยันข้อมูลหรือไม่?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes",
            }).then((result) => {
                if (result.isConfirmed) {
                    axios
                        .put("/api/payment/" + this.$route.params.id, {
                            step_3: 1,
                        })
                        .then((response) => {
                            Swal.fire({
                                position: "center",
                                icon: "success",
                                title: response.data.message,
                                showConfirmButton: false,
                                timer: 1500,
                            });
                            this.$router.push("/dashboard");
                        })
                        .catch((err) => {});
                }
            });
        },
    },
};
</script>
