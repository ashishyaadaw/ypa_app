@extends('pages.about.layout')

@section('title', $title)
@section('file', $title)
@section('folder', $folder)

@section('page-content')

    <!-- <h1 class="text-center text-slate-900 text-5xl mt-10 font-bold uppercase">{{ $title }}</h1> -->
    <div class="container py-20 lg:py-28 lg:p-10">
        <div class="flex flex-col items-center justify-between pb-16 md:pb-20 lg:flex-row lg:pb-24">
            <div class="text-center sm:w-5/6 md:w-9/10 md:text-left lg:w-3/5">
                <h2 class="font-header text-2xl text-black sm:text-3xl md:text-4xl lg:text-5xl">
                    Official
                </h2>
                <p class="font-semi-bold pt-5 font-body text-[#FDBA74] uppercase text-primary md:pt-6 md:text-lg">
                    PRESIDENTIAL MESSAGE
                </p>
                <p class="pt-5 pb-4 font-body text-md font-light leading-loose text-black">
                    It gives me immense pleasure to present the Annual Report of Year 2021-22 and to
                    specially mention that we at Youth Power Association (YPA) are determined goal
                    setter, challenge acceptor and solution oriented team.
                    The Annual Report stands testimony to the fact that whenever it comes for the
                    initiatives, public awareness, reaching upto the grass- root levels, solving the
                    environmental issues, eliminating pollution problems and becoming the part of
                    sustainable development, YPA has always been trailblazer for the welfare of society
                    and the social works. Working for the Youth Empowerment, Water Conservation,
                    Cancer Awareness and other plethora of activities, YPA acts as a shield in spreading
                    awareness among people and adopts innovative and creative methods to connect
                    deeply with the local communities and their thought-processes.
                    The highly energetic youth team of YPA has worked tirelessly and with incredible
                    co-ordination to perform numerous activities during April 2021 to March 2022.
                    The events like Jal Hai To Kal Hai, various Signature Campaigns, Workshops, Public
                    Awareness Rallies on numerous social issues, Ground water week celebrations,
                    Voter Awareness Street Plays, Cleanliness and Sanitation programmes like
                    Shramdan Abhiyaan, the Kavya Spandan on Republic Day were the glimpses of our
                    activities.
                    Team YPA had touched amazing peaks and heights with every passing days since
                    last three years, and while accepting all the challenges, devoted itself for the
                    society's issues & welfare works especially reaching to the last man, in general, and
                    youth segment, in particular, for the diligent transformation of present and shaping
                    the future.

                </p>
            </div>
            <div class="mt-6 h-88 w-full bg-cover bg-top bg-no-repeat shadow-2xl sm:h-130 sm:w-5/6 md:h-156 md:w-9/10 lg:ml-20 lg:mr-auto lg:mt-0 lg:h-124 lg:w-2/5 xl:ml-40 xl:h-136"
                style="background-image: url(/uploads/president.png)">
                <img src="/uploads/president.png" />
            </div>
        </div>
        <div class="mx-auto text-center sm:w-5/6 md:w-9/10 md:text-left lg:mx-0 lg:w-full">
            <h2 class="font-header text-2xl text-black sm:text-3xl md:text-4xl lg:text-5xl">
                NGO Values
            </h2>
            <p class="pt-5 pb-4 font-body text-md font-light leading-loose text-black">
                The Youth Power Association (YPA) is a registered non-governmental organization (NGO) that operates under
                the legal framework established for charitable entities. As a registered NGO, YPA complies with all
                necessary legal requirements, including obtaining tax-exempt status, which allows it to operate without the
                burden of income taxation on its funding. The organization is empaneled with various governmental and
                non-governmental bodies, enabling it to collaborate on a wide range of social initiatives. This empanelment
                not only enhances YPA’s credibility but also provides access to additional resources and support,
                facilitating its mission to empower youth through education, skill development, and community engagement.
            </p>
            <div class="container mx-auto p-4">
                <h1 class="text-2xl font-bold mb-4">Registration Details</h1>
                <table class="min-w-full font-semibold bg-white border border-gray-300">

                    <tbody>
                        <tr class="bg-gray-100 border-b">
                            <td class="px-6 py-4 whitespace-nowrap">Registration Number </td>
                            <td class="px-6 py-4 whitespace-nowrap">MAH/02107/2019-2020<br><span class="font-thin">[
                                    Registered under section 21 in
                                    the Societies Registration Act, 1860 in Uttar Pradesh ]</span></td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap">Niti Ayog (NGO Darpan UID No.) :</td>
                            <td class="px-6 py-4 whitespace-nowrap">UP/2019/0248792</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap">Dept. of Culture, U.P Registration Serial No. :</td>
                            <td class="px-6 py-4 whitespace-nowrap">3582</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container mx-auto p-4">
                <h1 class="text-2xl font-bold mb-4">Income Tax Department</h1>
                <table class="min-w-full bg-white border font-semibold border-gray-300">

                    <tbody>
                        <tr class="bg-gray-100 border-b">
                            <td class="px-6 py-4 whitespace-nowrap">PAN No. :</td>
                            <td class="px-6 py-4 whitespace-nowrap">AAAAY9042M</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap">12 A (UID No.) :</td>
                            <td class="px-6 py-4 whitespace-nowrap">AAAAY9042ME2021</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap">80 G (UID No.) :</td>
                            <td class="px-6 py-4 whitespace-nowrap">AAAAY9042MF20226</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap">CSR (Corporate Social Responsibility) No. :</td>
                            <td class="px-6 py-4 whitespace-nowrap">CSR000037279</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="container mx-auto p-4">
                <h1 class="text-2xl font-bold mb-4">Bank Account Details</h1>
                <table class="min-w-full bg-white border font-semibold border-gray-300">

                    <tbody>
                        <tr class="bg-gray-100 border-b">
                            <td class="px-6 py-4 whitespace-nowrap">Bank Name :</td>
                            <td class="px-6 py-4 whitespace-nowrap">Indian Bank</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap">Branch :</td>
                            <td class="px-6 py-4 whitespace-nowrap">Gorakhpur University</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap">IFSC Code :</td>
                            <td class="px-6 py-4 whitespace-nowrap">IDIB000G616</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap">Bank Account Number :</td>
                            <td class="px-6 py-4 whitespace-nowrap">50496963225</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
