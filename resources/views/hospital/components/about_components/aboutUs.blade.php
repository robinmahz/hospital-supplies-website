@php
    $cardInfo = [
    [
    "title" => "What we do",
    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic eveniet dolore aliquam
        accusantium repellat fuga eum
        ipsum molestias? Reiciendis, similique! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique
        quisquam perferendis harum eligendi natus sit? Facere totam eligendi unde pariatur! Non, neque impedit
        repellendus reprehenderit dignissimos animi iusto laborum quasi.",
    ],
    [
    "title" => "How we started",
    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic eveniet dolore aliquam
        accusantium repellat fuga eum
        ipsum molestias? Reiciendis, similique! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique
        quisquam perferendis harum eligendi natus sit? Facere totam eligendi unde pariatur! Non, neque impedit
        repellendus reprehenderit dignissimos animi iusto laborum quasi.",
    ],
    [
    "title" => "Company philosophy",
    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic eveniet dolore aliquam
        accusantium repellat fuga eum
        ipsum molestias? Reiciendis, similique! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique
        quisquam perferendis harum eligendi natus sit? Facere totam eligendi unde pariatur! Non, neque impedit
        repellendus reprehenderit dignissimos animi iusto laborum quasi.",
    ],
    ]
@endphp
<div class="mt-16 mb-8 text-center">
    <h1 class="text-4xl font-bold">About Us</h1>
    <span class="flex mt-8 justify-center flex-col items-center">Lorem ipsum dolor sit amet consectetur adipisicing
        elit.
        <div class="h-0.5 mt-4 bg-[tomato] w-36"></div>
    </span>
    <p class="mt-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolore ea delectus sunt
        quod beatae Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur, adipisicing
        elit. Quasi quo, est soluta quam vel dolores ratione? Lorem ipsum dolor sit amet, consectetur adipisicing
        elit. Vitae, voluptatum quam commodi quidem reiciendis quasi porro, error pariatur quas, cum eum
        exercitationem id modi expedita eaque sapiente illum tenetur nihil?
        accusamus quidem, et laborum dicta, consectetur iusto.</p>
</div>
<hr>
<div class="mt-8 grid grid-cols-2 justify-between gap-8">
    @each('hospital.components.about_components.card', $cardInfo , 'data', 'hospital.components.notfound')
</div>
