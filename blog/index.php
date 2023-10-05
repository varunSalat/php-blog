<?php include("../config.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php echo $header ?>
    <title>Blog app</title>
</head>

<body class="bg-slate-100">
    <!-- navbar  -->
    <?php include("../navbar.php") ?>
    <!-- main blog -->
    <main class="global-container bg-white mb-8">
        <article class="w-full flex flex-col items-center justify-center gap-4 p-2">
            <h1 class="text-center text-4xl font-black">
                Home Equity Line of Credit (HELOC)
            </h1>
            <h2 class="text-center font-semibold text-xl">
                A financial product called a home equity line of credit (HELOC)
                enables homeowners to borrow money using the equity they have accrued
                in their properties. Your home's equity is the amount that separates
                its current market worth from the remaining balance of your mortgage.
            </h2>
            <div class="w-full rounded-lg border-2 border-gray-500">
                <img src="../asset/demo.png" alt="" class="w-full rounded-md" />
            </div>
            <div class="p-2 mx-2">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et quibusdam
                deleniti, soluta cumque natus a. Maxime velit a aperiam id quisquam.
                Unde hic provident ratione nulla sit quo tempora nemo, fuga et vero?
                Aspernatur, aperiam expedita et veniam, earum illum voluptas deserunt
                voluptate quia dolorem iusto quae quibusdam debitis culpa quasi
                deleniti? Molestias, iure aliquid fuga autem laudantium voluptas
                tempore, recusandae ab exercitationem repudiandae cumque suscipit.
                Iure nihil harum consequatur rem ducimus quisquam quae, mollitia,
                eaque laudantium at error, unde tenetur fuga iusto sit? Sapiente error
                in dignissimos doloribus, harum similique alias fugiat placeat
                excepturi eum temporibus adipisci nulla id.
            </div>
        </article>
    </main>

    <?php include("../footer.php");
    echo '<script src="'.$url.'/main.js"></script>'; ?>
</body>

</html>