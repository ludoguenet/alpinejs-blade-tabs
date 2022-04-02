<div>
    <button
        x-on:click="selectedTab = 'all'"
        :class="selectedTab === 'all' ? activeClasses : ''"
        class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-clifford text-base font-semibold text-center transition"
    >
        Voir tout
    </button>

    @foreach ($tags as $tab)
        <button
            x-on:click="selectedTab = '{{ $tab }}'"
            :class="selectedTab === '{{ $tab }}' || selectedTab === 'all' ? activeClasses : inactiveClasses"
            class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition"
        >
            {{ $tab }}
        </button>
    @endforeach

    <div class="flex flex-wrap overflow-hidden">
        @foreach ($projects as $project)
            <div
                x-data="{
                    projectTags: {{ @Js::from($project['tags']) }},
                }"
                :class="projectTags.includes(selectedTab) || selectedTab === 'all' ? 'block' : 'hidden'"
                class="w-1/3 overflow-hidden p-5"
            >
                <div class="rounded-lg overflow-hidden">
                    <img
                        src="https://cdn.tailgrids.com/1.0/assets/images/portfolio/portfolio-01/image-03.jpg"
                        alt="portfolio"
                        class="w-full"
                    />
                </div>
                <div class="text-center bg-white relative z-10 py-9 px-3 rounded-lg shadow-lg mx-7 -mt-20">
                    <h3 class="font-bold text-xl text-gray-900">
                        {{ $project['title'] }}
                    </h3>
                    <div class="mb-4">
                        <template x-for="projectTag in projectTags">
                            <span class="text-clifford inline-block text-sm font-semibold mr-1" x-text="projectTag"></span>
                        </template>
                    </div>
                    <a
                        href="javascript:void(0)"
                        class=" text-clifford text-sm font-semibold py-3 px-7 inline-block border rounded-md hover:bg-clifford hover:border-clifford hover:text-white transition"
                    >
                        En savoir plus
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>