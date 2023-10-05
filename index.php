<?php 
include("./config.php");
$loginAPI = $url.'/wp/wp-json/api/v1/token';
$data = array(
    'username' => 'Scholarwithtech',
    'password' => '1OVmEzXwBLM^26tHTf'
);

$jsonData = json_encode($data);

// Initialize cURL session
$ch = curl_init($loginAPI);

// Set cURL options to send JSON data and receive response as JSON
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonData)
));

// Execute cURL session and get the response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Handle the response data (assuming the response is in JSON format)
$responseData = json_decode($response, true);

// Check if the decoding was successful
if ($responseData && isset($responseData['jwt_token'])) {
    // Save the token in a cookie named 'token'
    setcookie('token', $responseData['jwt_token'], time() + $responseData['expires_in'], '/');
} else {
    echo 'Error: Invalid response format.';
}

// Retrieve Bearer token from cookie
$token = isset($_COOKIE['token']) ? $_COOKIE['token'] : null;

if (!$token) {
    echo 'Error: Token not found in cookie.';
    exit;
}

// API endpoint URL
$urlAPI = $url.'/wp/wp-json/wp/v2/posts';

// Initialize cURL session
$ch = curl_init($urlAPI);

// Set cURL options to send GET request with Bearer token
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer ' . $token
));

// Execute cURL session and get the response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Handle the response data (assuming the response is in JSON format)
if ($response) {
    $responseData = json_decode($response, true);
} else {
    echo 'Error: No response from the API.';
}

?>
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
    <?php include("./navbar.php") ?>
    <!-- main body  -->
    <main class="global-container bg-white mb-8">
        <section class="w-full flex flex-col gap-2 items-center justify-center bg-white pb-4">
            <!-- Top Section  -->
            <section class="grid grid-cols-3 lg:grid-cols-4 gap-2 w-full p-2 lg:p-0 m-2 lg:m-0">
                <div class="col-span-3 flex flex-col items-start justify-start gap-2 w-full">
                    <div class="w-full p-2 border-b-2 border-gray-300">
                        <h1 class="text-2xl text-black font-bold">Articles</h1>
                    </div>
                    <div class="w-full flex-col items-start justify-start gap-2" id="articles">

                    </div>
                    <article
                        class="flex flex-col-reverse md:grid md:grid-cols-6 gap-4 w-full p-2 border-b-2 border-gray-300 m-2 cursor-pointer">
                        <div class="col-span-4 flex flex-col items-start justify-between gap-4">
                            <h1 class="text-2xl font-bold">
                                Home Equity Line of Credit (HELOC)
                            </h1>
                            <p class="text-gray-500 font-semibold text-sm">
                                A financial product called a home equity line of credit
                                (HELOC) enables homeowners to borrow money using the equity
                                they have accrued in their properties. Your home's equity is
                                the amount that separates its current market worth from the
                                remaining balance of your mortgage.
                            </p>
                            <a href="#"
                                class="px-4 py-2 bg-gray-300 text-black font-semibold text-base rounded-md">Science</a>
                        </div>
                        <div class="col-span-2 flex items-center justify-center rounded-lg border-2 border-gray-300">
                            <img src="./asset/demo.png" alt="" class="object-cover rounded-lg" />
                        </div>
                    </article>


                    <div class="w-full flex items-end justify-end mx-2 p-2">
                        <div class="flex items-center justify-center gap-2">
                            <a href="" class="flex items-center justify-center px-4 py-2 bg-gray-300 rounded-md">
                                <span class="material-symbols-outlined"> arrow_back </span>
                            </a>
                            <span class="mx-2 font-bold text-xl">1</span>
                            <a href="" class="flex items-center justify-center px-4 py-2 bg-gray-300 rounded-md"><span
                                    class="material-symbols-outlined">
                                    arrow_forward
                                </span></a>
                        </div>
                    </div>
                </div>
                <aside class="hidden lg:block col-span-1 w-full">
                    <div class="flex flex-col items-start justify-start w-full">
                        <div class="w-full p-2 border-b-2 border-gray-300">
                            <h1 class="text-2xl text-black font-bold">Most Viewed</h1>
                        </div>
                        <article class="flex flex-col gap-2 w-full items-center justify-center mt-2 p-2">
                            <div class="rounded-lg border-2 border-gray-300">
                                <img src="./asset/demo.png" alt="" class="object-cover rounded-lg" />
                            </div>
                            <h1 class="text-xl font-bold">
                                Home Equity Line of Credit (HELOC) hi this isjust checking
                            </h1>
                        </article>
                    </div>
                </aside>
            </section>

            <!-- bottom section  -->
            <section class="pt-4 w-full bg-white">
                <div class="flex flex-col items-start justify-start w-full">
                    <div class="w-full p-2 border-b-2 border-gray-300 mb-2">
                        <h1 class="text-2xl text-black font-bold">Most Viewed</h1>
                    </div>
                    <div class="flex items-center justify-center gap-4 flex-wrap">
                        <article
                            class="w-[250px] md:w-[300px] lg:w-[450px] p-2 border-[1px] shadow-md rounded-lg border-gray-300 flex flex-col items-start justify-start gap-2 m-2">
                            <div class="flex items-center justify-center rounded-md">
                                <img src="./asset/demo.png" alt="" class="rounded-md object-contain" />
                            </div>
                            <h1 class="text-xl font-bold">
                                Home Equity Line of Credit (HELOC)
                            </h1>
                            <p class="text-gray-500 font-medium text-sm">
                                A financial product called a home equity line of credit (HELOC)
                                enables homeowners to borrow money using the equity they have
                                accrued in their properties. Your home's equity is the amount
                                that separates its current market worth from the remaining
                                balance of your mortgage.
                            </p>
                        </article>
                        <article
                            class="w-[250px] md:w-[300px] lg:w-[450px] p-2 border-[1px] shadow-md rounded-lg border-gray-300 flex flex-col items-start justify-start gap-2 m-2">
                            <div class="flex items-center justify-center rounded-md">
                                <img src="./asset/demo.png" alt="" class="rounded-md object-contain" />
                            </div>
                            <h1 class="text-xl font-bold">
                                Home Equity Line of Credit (HELOC)
                            </h1>
                            <p class="text-gray-500 font-medium text-sm">
                                A financial product called a home equity line of credit (HELOC)
                                enables homeowners to borrow money using the equity they have
                                accrued in their properties. Your home's equity is the amount
                                that separates its current market worth from the remaining
                                balance of your mortgage.
                            </p>
                        </article>
                        <article
                            class="w-[250px] md:w-[300px] lg:w-[450px] p-2 border-[1px] shadow-md rounded-lg border-gray-300 flex flex-col items-start justify-start gap-2 m-2">
                            <div class="flex items-center justify-center rounded-md">
                                <img src="./asset/demo.png" alt="" class="rounded-md object-contain" />
                            </div>
                            <h1 class="text-xl font-bold">
                                Home Equity Line of Credit (HELOC)
                            </h1>
                            <p class="text-gray-500 font-medium text-sm">
                                A financial product called a home equity line of credit (HELOC)
                                enables homeowners to borrow money using the equity they have
                                accrued in their properties. Your home's equity is the amount
                                that separates its current market worth from the remaining
                                balance of your mortgage.
                            </p>
                        </article>
                        <article
                            class="w-[250px] md:w-[300px] lg:w-[450px] p-2 border-[1px] shadow-md rounded-lg border-gray-300 flex flex-col items-start justify-start gap-2 m-2">
                            <div class="flex items-center justify-center rounded-md">
                                <img src="./asset/demo.png" alt="" class="rounded-md object-contain" />
                            </div>
                            <h1 class="text-xl font-bold">
                                Home Equity Line of Credit (HELOC)
                            </h1>
                            <p class="text-gray-500 font-medium text-sm">
                                A financial product called a home equity line of credit (HELOC)
                                enables homeowners to borrow money using the equity they have
                                accrued in their properties. Your home's equity is the amount
                                that separates its current market worth from the remaining
                                balance of your mortgage.
                            </p>
                        </article>
                        <article
                            class="w-[250px] md:w-[300px] lg:w-[450px] p-2 border-[1px] shadow-md rounded-lg border-gray-300 flex flex-col items-start justify-start gap-2 m-2">
                            <div class="flex items-center justify-center rounded-md">
                                <img src="./asset/demo.png" alt="" class="rounded-md object-contain" />
                            </div>
                            <h1 class="text-xl font-bold">
                                Home Equity Line of Credit (HELOC)
                            </h1>
                            <p class="text-gray-500 font-medium text-sm">
                                A financial product called a home equity line of credit (HELOC)
                                enables homeowners to borrow money using the equity they have
                                accrued in their properties. Your home's equity is the amount
                                that separates its current market worth from the remaining
                                balance of your mortgage.
                            </p>
                        </article>
                    </div>
                </div>
            </section>
        </section>
    </main>
    <script>
    console.log(<?php echo $response ?>);
    const blogList = <?php echo $response ?>;

    function createArticleElement(title, description) {
        // Create HTML elements
        const article = document.createElement('article');
        article.className =
            'flex flex-col-reverse md:grid md:grid-cols-6 gap-4 w-full p-2 border-b-2 border-gray-300 m-2 cursor-pointer';

        const contentDiv = document.createElement('div');
        contentDiv.className = 'col-span-4 flex flex-col items-start justify-between gap-4';

        const heading = document.createElement('h1');
        heading.className = 'text-2xl font-bold';
        heading.textContent = title;

        const paragraph = document.createElement('p');
        paragraph.className = 'text-gray-500 font-semibold text-sm';
        paragraph.innerHTML = description;

        const categoryLink = document.createElement('a');
        categoryLink.href = '#';
        categoryLink.className = 'px-4 py-2 bg-gray-300 text-black font-semibold text-base rounded-md';
        categoryLink.textContent = 'Science';

        contentDiv.appendChild(heading);
        contentDiv.appendChild(paragraph);
        contentDiv.appendChild(categoryLink);

        const imageDiv = document.createElement('div');
        imageDiv.className = 'col-span-2 flex items-center justify-center rounded-lg border-2 border-gray-300';

        const image = document.createElement('img');
        image.src = './asset/demo.png';
        image.alt = '';
        image.className = 'object-cover rounded-lg';

        imageDiv.appendChild(image);

        article.appendChild(contentDiv);
        article.appendChild(imageDiv);

        return article;
    }

    // Example usage:
    const container = document.getElementById(
        'articles'); // Assuming you have a container element with the id 'container'
    blogList.forEach((b) => {
        container.appendChild(createArticleElement(b.title.rendered, b.excerpt.rendered));
    })
    </script>
    <?php include("./footer.php");
    echo '<script src="'.$url.'/main.js"></script>'; ?>
</body>

</html>