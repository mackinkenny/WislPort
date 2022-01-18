<template>
    <app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <Menu :status="isAdmin" :menuActive="5" />
                <div class="container">
                    <div class="flex">
                        <div class="w-8/12 p-3">
                            <div class="bg-white py-10 px-10 mb-8">
                                <div id="1">
                                    <h2 class="text-left font-bold main-title mb-3">
                                        {{ __('How frequently should I use this tool?') }}
                                    </h2>
                                </div>
                                <div class="text-left">
                                    <p class="text-base mb-3">
                                        {{ __('The tool is deigned to be used on an annual basis to assess the health of your organisations whistleblowing programme. Used year on year, this tool can provide important insights into the strengths and weaknesses within your organisations whistleblowing programme which can be leveraged or improved accordingly to provide ongoing support and benefits.') }}
                                    </p>
                                </div>
                                <div class="mt-12" id="2">
                                    <h2 class="text-left font-bold main-title mb-3">
                                        {{ __('Who should use this tool?') }}

                                    </h2>
                                </div>
                                <div class="text-left">
                                    <p class="text-base mb-3">
                                        {{ __('Ideally the tool should be used by an organisational role delegated by the person accountable for the whistleblowing programme and should be conducted in accordance with the whistleblowing team or a third party under contract with the skills and expertise to conduct an internal review.') }}
                                    </p>
                                </div>
                                <div class="mt-12" id="3">
                                    <h2 class="text-left font-bold main-title mb-3">
                                        {{ __('How do I use the tool?') }}
                                    </h2>
                                </div>
                                <div class="text-left">
                                    <p class="text-base mb-3">
                                        {{ __('The tool is broken into four (4) sections with a report available to review and download. There are 40 top level questions across these chapters, each with a series of sub-questions. Step one is to review the 40 top level questions to determine which questions are applicable or not applicable. Where a question is applicable, the admin role should tick this question which then exposes the related sub-questions for answering. The admin role is the only role that can set the high level questions at the start of each chapter.') }}
                                    </p>
                                    <p class="text-base mb-3">
                                        {{ __('When a sub-questions is not applicable, these should be set as not applicable and will not be reflected in the overall scoring of the report. Admin and users can choose this setting and it’s important to use the free text box below each top level question to justify decisions.') }}
                                    </p>
                                    <p class="text-base mb-3">
                                        {{ __('Each question should be answered based on review of evidence and the free text box at the end of each top level question used to document and justify answers.') }}
                                    </p>
                                    <p class="text-base mb-3">
                                        {{ __('For detailed information relating to each of the top level question, refer to the Handbook which is included with your subscription. Each chapter references the questions to which it relates and guidance for clarity can be found there.') }}
                                    </p>
                                </div>
                                <div class="mt-12" id="4">
                                    <h2 class="text-left font-bold main-title mb-3">
                                        {{ __('What does the report consist of?') }}
                                    </h2>
                                </div>
                                <div class="text-left">
                                    <p class="text-base mb-3">
                                        {{ __('The report is built across three areas:') }}
                                    </p>
                                    <p class="text-base mb-3">
                                        {{ __('1. Score by section. This is the total score for each of the 40 top level questions within the four sections.') }}
                                    </p>
                                    <p class="text-base mb-3">
                                        {{ __('2. TIP Score. This score reflects Trust, Impartiality and Protection which are aligned to the key principles of ISO37002 and identify areas of weakness which may require attention.') }}
                                    </p>
                                    <p class="text-base mb-3">
                                        {{ __('3. Chapter Score. ISO37002 is broken into seven (7) chapters. The report reflects the score based on these ISO chapters to outline your whistleblowing programmes performance in relation to the standard.') }}
                                    </p>
                                    <p class="text-base mb-3">
                                        {{ __('The report can be viewed while work is in flight and the report can be printed to PDF') }}
                                    </p>
                                    <p class="text-base mb-3">
                                        {{ __('Only the Admin role can mark a report as completed and close the report.') }}
                                    </p>
                                </div>

                                <div class="mt-12" id="5">
                                    <h2 class="text-left font-bold main-title mb-3">
                                        {{ __('How do I assess the results?') }}
                                    </h2>
                                </div>
                                <div class="text-left">
                                    <p class="text-base mb-3">
                                        {{ __('Each question is given a RAG status to highlight areas of strength and concern for management reporting. Scores greater than 80% are Green, between 60-79% Amber, and scores below 60% are Red. These RAG scores are also applied to the ISO principles of Trust, Impartiality and Protection.') }}
                                    </p>
                                    <p class="text-base mb-3">
                                        {{ __('Where a response is Amber or Red, refer to the Handbook which is included with your subscription. At the end of each chapter which relates to the top level question are tips and guidance for making improvements within these areas.') }}
                                    </p>
                                </div>
                                <div class="mt-12" id="6">
                                    <h2 class="text-left font-bold main-title mb-3">
                                        {{ __('Where can I seek additional Support?') }}
                                    </h2>
                                </div>
                                <div class="text-left">
                                    <p class="text-base mb-3">
                                        {{ __('Your WislPort subscription comes with a one hour consultation which you can book via our website as') }}
                                        <a class="text-indigo-500 underline" href="http://www.wislport.com"> www.wislport.com</a>
                                    </p>
                                </div>
                                <div class="mt-12" id="7">
                                    <h2 class="text-left font-bold main-title mb-3">
                                        {{ __('Where can I provide feedback or share ideas?') }}
                                    </h2>
                                </div>
                                <div class="text-left">
                                    <p class="text-base mb-3">
                                        {{ __('At WislPort we value customer feedback and are always on the lookout for ways to not only improve our products, but to make whistleblowing and governance and compliance easier and more cost-effective for organisations. If you would like to share your thoughts, please contact us at') }}
                                        <a class="text-indigo-500 underline" href="mailto:subscriptions@wislport.com"> subscriptions@wislport.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-4/12 p-3" >
                            <div class="bg-white py-10 px-10 mb-8 sticky" style="top: 10%;">
                                <div class="text-left">
                                    <p class="regulat-text font-bold mb-3 cursor-pointer" v-on:click="anchor(1)">
                                        {{ __('How frequently should I use this tool?') }}
                                    </p>
                                    <p class="regulat-text font-bold mb-3 cursor-pointer" v-on:click="anchor(2)">
                                        {{ __('Who should use this tool?') }}
                                    </p>
                                    <p class="regulat-text font-bold mb-3 cursor-pointer" v-on:click="anchor(3)">
                                        {{ __('How do I use the tool?') }}
                                    </p>
                                    <p class="regulat-text font-bold mb-3 cursor-pointer" v-on:click="anchor(4)">
                                        {{ __('What does the report consist of?') }}
                                    </p>
                                    <p class="regulat-text font-bold mb-3 cursor-pointer" v-on:click="anchor(5)">
                                        {{ __('How do I assess the results?') }}
                                    </p>
                                    <p class="regulat-text font-bold mb-3 cursor-pointer" v-on:click="anchor(6)">
                                        {{ __('Where can I seek additional Support?') }}
                                    </p>
                                    <p class="regulat-text font-bold mb-3 cursor-pointer" v-on:click="anchor(7)">
                                        {{ __('Where can I provide feedback or share ideas?') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import JetButton from '@/Jetstream/Button'
    import Menu from '@/Layouts/Menu'
    export default {
        name: "Main",
        props: [
          'isAdmin'
        ],
        components: {
            AppLayout,
            JetButton,
            Menu
        },
        methods: {
            anchor: function (id) {
                window.scrollTo({
                    top: document.getElementById(id).offsetTop -50,
                    behavior: "smooth"
                });
            }
        }
    }
</script>

<style scoped>

</style>