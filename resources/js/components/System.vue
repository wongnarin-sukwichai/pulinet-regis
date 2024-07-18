<template>
    <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">
        <div class="flex items-center justify-center">
            <table class="r border">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="py-3.5 px-4 text-gray-800 border-r">
                            รายละเอียด
                        </th>
                        <th class="py-3.5 px-4 text-gray-800">#</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 text-left">
                    <tr
                        class="border-r border"
                        v-for="(period, index) in periodList"
                        :key="index"
                    >
                        <td class="py-3.5 px-24 text-sm border-r">
                            {{ period.title }}
                        </td>
                        <td class="py-3.5 px-4">
                            <box-icon
                                v-if="period.id === this.data.system"
                                name="check-circle"
                                color="#84cc16"
                                class="cursor-pointer"
                            ></box-icon>
                            <box-icon
                                v-else
                                name="block"
                                color="#ef4444"
                                class="cursor-pointer"
                                animation="tada-hover"
                                @click="upSystem(period.id)"
                            ></box-icon>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div
            class="overflow-hidden mx-auto mt-4 max-w-2xl rounded-3xl border-2 border-dotted border-gray-200 lg:mx-0 lg:max-w-none bg-white"
        >
            <p class="text-left px-4 pt-4">อัตราค่าบริการ :</p>
            <br />
            <div class="px-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div
                    class="inline-block min-w-full pb-4 align-middle md:px-6 lg:px-8"
                >
                    <div class="border border-gray-200 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        scope="col"
                                        class="py-3.5 px-4 text-sm font-normal text-gray-800 border-r"
                                        colspan="3"
                                    >
                                        <p>ชำระค่าลงทะเบียน (ช่วงที่ 1)</p>
                                        <p>1 ตุลาคม - 10 ธันวาคม 2567</p>
                                    </th>
                                    <th
                                        scope="col"
                                        class="py-3.5 px-4 text-sm font-normal text-gray-800"
                                        colspan="3"
                                    >
                                        <p>ชำระค่าลงทะเบียน (ช่วงที่ 2)</p>
                                        <p>11 - 20 ธันวาคม 2567</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
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
                                        class="px-4 py-4 text-sm font-medium whitespace-nowrap border-r"
                                    >
                                        <div
                                            class="inline px-3 py-1 text-sm font-normal rounded-full"
                                        >
                                            นิสิต/นักศึกษา
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
                                        class="px-4 py-4 text-sm whitespace-nowrap border-r"
                                    >
                                        <div
                                            class="inline px-3 py-1 text-sm font-normal rounded-full"
                                        >
                                            ไม่ใช่สมาชิก<br />
                                            PULINET/PULINET PLUS
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
                                        class="px-12 py-4 text-sm font-medium whitespace-nowrap border-r"
                                    >
                                        <div
                                            class="inline px-3 py-1 text-sm font-normal rounded-full"
                                        >
                                            3,000 บาท
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
</template>

<script>
export default {
    async mounted() {
        await this.getSystem();
        this.getPeriod();
    },
    data() {
        return {
            periodList: "",
            data: {
                system: "",
            },
        };
    },
    methods: {
        getSystem() {
            axios
                .get("/api/system")
                .then((response) => {
                    this.data.system = response.data[0].ref_period;
                })
                .catch((err) => {});
        },
        async getPeriod() {
            axios
                .get("/api/period")
                .then((response) => {
                    this.periodList = response.data;
                })
                .catch((err) => {});
        },
        upSystem(id) {
            axios
                .put("/api/system/" + 1, { 'system' : id})                    // 1 คือ id ที่ต้องแก้ไข พอดี ใน table มี record เดียวเลยกำหนดได้
                .then((response) => {
                    window.location.reload();
                })
                .catch((err) => {});
        },
    },
};
</script>
