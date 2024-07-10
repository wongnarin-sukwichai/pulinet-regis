<template>
    <header
        class="absolute inset-x-0 top-0 z-50 shadow-lg bg-gradient-to-r from-blue-800 to-indigo-900"
    >
        <nav
            class="flex items-center justify-between p-6 lg:px-8"
            aria-label="Global"
        >
            <div class="flex lg:flex-1">
                <router-link to="/">
                    <span class="sr-only">Your Company</span>
                    <img class="h-16 w-auto" :src="logo" alt="" />
                </router-link>
            </div>
            <div class="flex lg:hidden">
                <button
                    type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700 cursor-pointer"
                    @click="isShowMenu()"
                >
                    <svg
                        class="h-6 w-6 text-white"
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
                <router-link to="login" v-if="!user">
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
                <div class="flex items-center" v-else>
                    <p class="px-2 text-white">@ {{ fullname }} |</p>
                    <button
                        class="flex p-2 bg-indigo-700 hover:bg-indigo-800 cursor-pointer rounded-lg text-normal text-white text-sm shadow-lg"
                        @click="logout()"
                    >
                        <p class="pr-1">ออกจากระบบ</p>
                        <box-icon
                            name="down-arrow"
                            type="solid"
                            size="xs"
                            color="white"
                            class="flex items-center"
                        ></box-icon>
                    </button>
                </div>
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
                    class="bg-gradient-to-r from-blue-800 to-indigo-900 fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
                >
                    <div class="flex items-center justify-between">
                        <router-link to="/" class="-m-1.5 p-1.5">
                            <img class="h-8 w-auto" :src="logo" alt="" />
                        </router-link>
                        <button
                            type="button"
                            class="-m-2.5 rounded-md p-2.5 text-gray-700 cursor-pointer"
                            @click="isShowMenu()"
                        >
                            <svg
                                class="h-6 w-6 text-white"
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
                        <div class="-my-6 divide-y mt-0.5">
                            <div class="py-6">
                                <div
                                    class="flex p-3 cursor-pointer text-normal border rounded-full shadow-lg text-black bg-gradient-to-r from-gray-50 to-gray-100"
                                    @click="link()"
                                    v-if="!user"
                                >
                                    <p class="pl-1 text-sm">เข้าสู่ระบบ</p>
                                    <div class="flex justify-end">
                                        <box-icon
                                            class="mr-4"
                                            name="chevrons-right"
                                            type="solid"
                                            size="xs"
                                            color="black"
                                        ></box-icon>
                                    </div>
                                </div>

                                <div v-else>
                                    <p class="px-2 text-white mb-4">
                                        @ {{ fullname }} |
                                    </p>
                                    <div
                                        class="flex p-3 cursor-pointer text-normal border rounded-full shadow-lg text-black bg-gradient-to-r from-gray-50 to-gray-100"
                                        @click="logout()"
                                    >
                                        <p class="pl-1 text-sm">ออกจากระบบ</p>
                                        <div class="flex justify-end">
                                            <box-icon
                                                class="mr-4"
                                                name="chevrons-down"
                                                type="solid"
                                                size="xs"
                                                color="black"
                                            ></box-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </transition>
    </header>

    <!-- Replace with your content -->
    <main class="h-screen">
        <router-view v-slot="{ Component, route }">
            <transition name="fade" mode="out-in">
                <div :key="route.name">
                    <component :is="Component"> </component>
                </div>
            </transition>
        </router-view>

        <footer
            class="mt-20 bottom-0 border-t h-auto w-full text-gray-50 bg-gradient-to-r from-blue-800 to-indigo-900"
        >
            <div class="py-4 text-sm text-center dark:text-gray-50">
                <p>การประชุมวิชาการระดับชาติ PULINET ครั้งที่ 15</p>
                <p>(The 15th PULINET National Conference – PULINET 2025)</p>
                <p>
                    "Better Libraries: Honour Yesterday, Celebrate Today,
                    Embrace Tomorrow"
                </p>
                <p>
                    จัดโดย สำนักวิทยบริการ มหาวิทยาลัยมหาสารคาม &
                    ข่ายงานห้องสมุดมหาวิทยาลัยส่วนภูมิภาค (PULINET)
                </p>
                <p>ระหว่างวันที่ 10 - 12 มกราคม 2567 ณ มหาวิทยาลัยมหาสารคาม</p>
                <br />
                ©2024 Academic Resource Center MSU
            </div>
        </footer>
    </main>
    <!-- /End replace -->
</template>

<script>
export default {
    mounted() {},
    data() {
        return {
            logo: "/img/logo.png",
            showMenu: false,
        };
    },
    methods: {
        isShowMenu() {
            this.showMenu = !this.showMenu;
        },
        link() {
            this.isShowMenu();
            this.$router.push("login");
        },
        async logout() {
            this.isShowMenu();
            await this.$store.dispatch("logout");
            this.$router.push("login");
        },
    },
    computed: {
        user() {
            return this.$store.getters.user;
        },
        fullname() {
            return this.$store.getters.fullname;
        },
    },
};
</script>
