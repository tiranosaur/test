<?php
function get_content($URL)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $URL);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

$arr = [
    "http://www.instavector.ru/partner/callback/",
    "http://www.instavector.ru/partner/en",
    "http://www.instavector.ru/analyst/curentreview/78713",
    "http://www.instavector.ru/analyst/curentreview/65116",
    "http://www.instavector.ru/analyst/curentreview/81193",
    "http://www.instavector.ru/analyst/curentreview/112984",
    "http://www.instavector.ru/analyst/curentreview/112902",
    "http://www.instavector.ru/analyst/curentreview/52216",
    "http://www.instavector.ru/analyst/curentreview/117970",
    "http://www.instavector.ru/analyst/curentreview/122074",
    "http://www.instavector.ru/analyst/curentreview/64872",
    "http://www.instavector.ru/analyst/curentreview/81647",
    "http://www.instavector.ru/analyst/curentreview/118692",
    "http://www.instavector.ru/analyst/curentreview/26933",
    "http://www.instavector.ru/analyst/curentreview/119778",
    "http://www.instavector.ru/analyst/curentreview/152920",
    "http://www.instavector.ru/analyst/curentreview/108825",
    "http://www.instavector.ru/analyst/curentreview/113870",
    "http://www.instavector.ru/analyst/curentreview/118982",
    "http://www.instavector.ru/analyst/curentreview/63493",
    "http://www.instavector.ru/analyst/curentreview/152601",
    "http://www.instavector.ru/analyst/curentreview/120072",
    "http://www.instavector.ru/analyst/curentreview/93321",
    "http://www.instavector.ru/analyst/curentreview/120356",
    "http://www.instavector.ru/analyst/curentreview/59269",
    "http://www.instavector.ru/analyst/curentreview/64427",
    "http://www.instavector.ru/analyst/curentreview/161880",
    "http://www.instavector.ru/analyst/curentreview/37544",
    "http://www.instavector.ru/analyst/curentreview/113086",
    "http://www.instavector.ru/analyst/curentreview/55252",
    "http://www.instavector.ru/analyst/curentreview/35856",
    "http://www.instavector.ru/analyst/curentreview/117670",
    "http://www.instavector.ru/client/en/margin_lending/",
    "http://www.instavector.ru/analyst/curentreview/124032",
    "http://www.instavector.ru/analyst/curentreview/26563",
    "http://www.instavector.ru/analyst/curentreview/121790",
    "http://www.instavector.ru/analyst/curentreview/114498",
    "http://www.instavector.ru/analyst/curentreview/122242",
    "http://www.instavector.ru/analyst/curentreview/72725",
    "http://www.instavector.ru/analyst/curentreview/119382",
    "http://www.instavector.ru/analyst/curentreview/119516",
    "http://www.instavector.ru/analyst/curentreview/118706",
    "http://www.instavector.ru/review/index/5",
    "http://www.instavector.ru/analyst/curentreview/110284",
    "http://www.instavector.ru/analyst/curentreview/28113",
    "http://www.instavector.ru/analyst/curentreview/25943",
    "http://www.instavector.ru/analyst/curentreview/110181",
    "http://www.instavector.ru/analyst/curentreview/25017",
    "http://www.instavector.ru/analyst/curentreview/45666",
    "http://www.instavector.ru/analyst/curentreview/52936",
    "http://www.instavector.ru/analyst/curentreview/58250",
    "http://www.instavector.ru/analyst/curentreview/59805",
    "http://www.instavector.ru/client/en/callback/",
    "http://www.instavector.ru/analyst/index/stock_markets/214/",
    "http://www.instavector.ru/en/analyst/curentreview/18061",
    "http://www.instavector.ru/en/analyst/curentreview/15128",
    "http://www.instavector.ru/en/analyst/curentreview/40526",
    "http://www.instavector.ru/en/analyst/curentreview/22093",
    "http://www.instavector.ru/en/analyst/curentreview/31611",
    "http://www.instavector.ru/analyst/index/stock_markets/331/",
    "http://www.instavector.ru/en/analyst/curentreview/19887",
    "http://www.instavector.ru/en/analyst/curentreview/26444",
    "http://www.instavector.ru/en/analyst/curentreview/31143",
    "http://www.instavector.ru/en/analyst/curentreview/28467",
    "http://www.instavector.ru/en/analyst/curentreview/25777",
    "http://www.instavector.ru/en/analyst/curentreview/42954",
    "http://www.instavector.ru/analyst/index/stock_markets/333/",
    "http://www.instavector.ru/en/analyst/curentreview/42898",
    "http://www.instavector.ru/en/analyst/curentreview/46055",
    "http://www.instavector.ru/en/analyst/curentreview/46103",
    "http://www.instavector.ru/en/analyst/curentreview/46081",
    "http://www.instavector.ru/en/education_trading_form/index/XX",
    "http://www.instavector.ru/",
    "http://www.instavector.ru/",
    "http://www.instavector.ru/financial_records",
    "http://www.instavector.ru/stock_market",
    "http://www.instavector.ru/company_policy",
    "http://www.instavector.ru/non_resident",
    "http://www.instavector.ru/micex",
    "http://www.instavector.ru/broker_service",
    "http://www.instavector.ru/partnership_program",
    "http://www.instavector.ru/license",
    "http://www.instavector.ru/consultations",
    "http://www.instavector.ru/resident",
    "http://www.instavector.ru/rts",
    "http://www.instavector.ru/become_partner_InstaVector",
    "http://www.instavector.ru/education",
    "http://www.instavector.ru/advantages",
    "http://www.instavector.ru/en/",
    "http://www.instavector.ru/wall_street",
    "http://www.instavector.ru/registration_of_education",
    "http://www.instavector.ru/education_trading",
    "http://www.instavector.ru/become_client",
    "http://www.instavector.ru/technical_support",
    "http://www.instavector.ru/en/company_policy",
    "http://www.instavector.ru/en/consultations",
    "http://www.instavector.ru/en/financial_records",
    "http://www.instavector.ru/en/wall_street",
    "http://www.instavector.ru/en/license",
    "http://www.instavector.ru/en/non_resident",
    "http://www.instavector.ru/en/trading_terminal",
    "http://www.instavector.ru/en/broker_service",
    "http://www.instavector.ru/en/education",
    "http://www.instavector.ru/en/rts",
    "http://www.instavector.ru/en/become_partner_instavector/",
    "http://www.instavector.ru/en/micex",
    "http://www.instavector.ru/en/stock_market",
    "http://www.instavector.ru/en/classic_trading",
    "http://www.instavector.ru/en/basic_software",
    "http://www.instavector.ru/en/resident",
    "http://www.instavector.ru/en/become_client",
    "http://www.instavector.ru/en/education_trading",
    "http://www.instavector.ru/en/partnership_program",
    "http://www.instavector.ru/en/registration_of_education",
    "http://www.instavector.ru/seminars",
    "http://www.instavector.ru/analyst",
    "http://www.instavector.ru/disclosure",
    "http://www.instavector.ru/buying_stocks",
    "http://www.instavector.ru/agreement",
    "http://www.instavector.ru/regulatory_documents",
    "http://www.instavector.ru/review",
    "http://www.instavector.ru/banners",
    "http://www.instavector.ru/money_transfer",
    "http://www.instavector.ru/stock_trading_glossary",
    "http://www.instavector.ru/information_for_partners",
    "http://www.instavector.ru/risks_warning",
    "http://www.instavector.ru/classic_trading",
    "http://www.instavector.ru/trading_terminal",
    "http://www.instavector.ru/contacts",
    "http://www.instavector.ru/reglaments",
    "http://www.instavector.ru/margin_trading",
    "http://www.instavector.ru/director_letter",
    "http://www.instavector.ru/basic_software",
    "http://www.instavector.ru/replenishment",
    "http://www.instavector.ru/additional_software",
    "http://www.instavector.ru/technology",
    "http://www.instavector.ru/about",
    "http://www.instavector.ru/bank_zenit",
    "http://www.instavector.ru/hardware",
    "http://www.instavector.ru/services",
    "http://www.instavector.ru/otc_trading",
    "http://www.instavector.ru/feedback/",
    "http://www.instavector.ru/insider_info",
    "http://www.instavector.ru/client/",
    "http://www.instavector.ru/partner/",
    "http://www.instavector.ru/en//license",
    "http://www.instavector.ru/en/seminars",
    "http://www.instavector.ru/instabroker_clients/old",
    "http://www.instavector.ru/en/money_transfer",
    "http://www.instavector.ru/en/risks_warning/",
    "http://www.instavector.ru/instabroker_clients/army",
    "http://www.instavector.ru/instabroker_clients/housewife",
    "http://www.instavector.ru/en/analyst",
    "http://www.instavector.ru/en/additional_software/",
    "http://www.instavector.ru/en/stock_trading_glossary",
    "http://www.instavector.ru/en/services",
    "http://www.instavector.ru/en/regulatory_documents",
    "http://www.instavector.ru/en/buying_stocks",
    "http://www.instavector.ru/en/review",
    "http://www.instavector.ru/instabroker_clients/student",
    "http://www.instavector.ru/en/contacts",
    "http://www.instavector.ru/en/banners",
    "http://www.instavector.ru/en/information_for_partners",
    "http://www.instavector.ru/en/hardware",
    "http://www.instavector.ru/en/advantages",
    "http://www.instavector.ru/en/disclosure/",
    "http://www.instavector.ru/en/about",
    "http://www.instavector.ru/en/technology",
    "http://www.instavector.ru/en/otc_trading",
    "http://www.instavector.ru/en/technical_support",
    "http://www.instavector.ru/en/feedback/",
    "http://www.instavector.ru/client/en",
    "http://www.instavector.ru/client/callback/",
];
$result = [];
foreach ($arr as $item) {
    $str = file_get_contents($item);
    if (strpos('_' . $str, 'forex') > 0 || strpos('_' . $str, 'форекс') > 0) {
        array_push($result, $item);
    }
}
print_r($result);