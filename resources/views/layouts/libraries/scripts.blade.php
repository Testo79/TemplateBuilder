<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<!-- Script for geo -->
<script>
               $(document).ready(function() {
                const countries = [{
            id: '',
            text: '',
            currency: '',
            flag: ''
        },
        {
            id: 'AF',
            text: 'Afghanistan',
            currency: 'AFN',
            flag: 'https://flagcdn.com/w320/af.png'
        },
        {
            id: 'ZA',
            text: 'Afrique du Sud',
            currency: 'ZAR',
            flag: 'https://flagcdn.com/w320/za.png'
        },
        {
            id: 'AL',
            text: 'Albanie',
            currency: 'ALL',
            flag: 'https://flagcdn.com/w320/al.png'
        },
        {
            id: 'DZ',
            text: 'Algérie',
            currency: 'DZD',
            flag: 'https://flagcdn.com/w320/dz.png'
        },
        {
            id: 'DE',
            text: 'Allemagne',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/de.png'
        },
        {
            id: 'AD',
            text: 'Andorre',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/ad.png'
        },
        {
            id: 'AO',
            text: 'Angola',
            currency: 'AOA',
            flag: 'https://flagcdn.com/w320/ao.png'
        },
        {
            id: 'AI',
            text: 'Anguilla',
            currency: 'XCD',
            flag: 'https://flagcdn.com/w320/ai.png'
        },
        {
            id: 'AQ',
            text: 'Antarctique',
            currency: '',
            flag: 'https://flagcdn.com/w320/aq.png'
        },
        {
            id: 'AG',
            text: 'Antigua et Barbuda',
            currency: 'XCD',
            flag: 'https://flagcdn.com/w320/ag.png'
        },
        {
            id: 'SA',
            text: 'Arabie Saoudite',
            currency: 'SAR',
            flag: 'https://flagcdn.com/w320/sa.png'
        },
        {
            id: 'AR',
            text: 'Argentine',
            currency: 'ARS',
            flag: 'https://flagcdn.com/w320/ar.png'
        },
        {
            id: 'AM',
            text: 'Arménie',
            currency: 'AMD',
            flag: 'https://flagcdn.com/w320/am.png'
        },
        {
            id: 'AW',
            text: 'Aruba',
            currency: 'AWG',
            flag: 'https://flagcdn.com/w320/aw.png'
        },
        {
            id: 'AU',
            text: 'Australie',
            currency: 'AUD',
            flag: 'https://flagcdn.com/w320/au.png'
        },
        {
            id: 'AT',
            text: 'Autriche',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/at.png'
        },
        {
            id: 'AZ',
            text: 'Azerbaïdjan',
            currency: 'AZN',
            flag: 'https://flagcdn.com/w320/az.png'
        },
        {
            id: 'BS',
            text: 'Bahamas',
            currency: 'BSD',
            flag: 'https://flagcdn.com/w320/bs.png'
        },
        {
            id: 'BH',
            text: 'Bahreïn',
            currency: 'BHD',
            flag: 'https://flagcdn.com/w320/bh.png'
        },
        {
            id: 'BD',
            text: 'Bangladesh',
            currency: 'BDT',
            flag: 'https://flagcdn.com/w320/bd.png'
        },
        {
            id: 'BB',
            text: 'Barbade',
            currency: 'BBD',
            flag: 'https://flagcdn.com/w320/bb.png'
        },
        {
            id: 'BE',
            text: 'Belgique',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/be.png'
        },
        {
            id: 'BZ',
            text: 'Bélize',
            currency: 'BZD',
            flag: 'https://flagcdn.com/w320/bz.png'
        },
        {
            id: 'BJ',
            text: 'Bénin',
            currency: 'XOF',
            flag: 'https://flagcdn.com/w320/bj.png'
        },
        {
            id: 'BM',
            text: 'Bermudes',
            currency: 'BMD',
            flag: 'https://flagcdn.com/w320/bm.png'
        },
        {
            id: 'BT',
            text: 'Bhoutan',
            currency: 'BTN',
            flag: 'https://flagcdn.com/w320/bt.png'
        },
        {
            id: 'BY',
            text: 'Biélorussie',
            currency: 'BYN',
            flag: 'https://flagcdn.com/w320/by.png'
        },
        {
            id: 'BO',
            text: 'Bolivie',
            currency: 'BOB',
            flag: 'https://flagcdn.com/w320/bo.png'
        },
        {
            id: 'BQ',
            text: 'Bonaire',
            currency: '',
            flag: 'https://flagcdn.com/w320/bq.png'
        },
        {
            id: 'BA',
            text: 'Bosnie - Herzégovine',
            currency: 'BAM',
            flag: 'https://flagcdn.com/w320/ba.png'
        },
        {
            id: 'BW',
            text: 'Botswana',
            currency: 'BWP',
            flag: 'https://flagcdn.com/w320/bw.png'
        },
        {
            id: 'BR',
            text: 'Brésil',
            currency: 'BRL',
            flag: 'https://flagcdn.com/w320/br.png'
        },
        {
            id: 'BN',
            text: 'Brunei',
            currency: 'BND',
            flag: 'https://flagcdn.com/w320/bn.png'
        },
        {
            id: 'BG',
            text: 'Bulgarie',
            currency: 'BGN',
            flag: 'https://flagcdn.com/w320/bg.png'
        },
        {
            id: 'BF',
            text: 'Burkina Faso',
            currency: 'XOF',
            flag: 'https://flagcdn.com/w320/bf.png'
        },
        {
            id: 'BI',
            text: 'Burundi',
            currency: 'BIF',
            flag: 'https://flagcdn.com/w320/bi.png'
        },
        {
            id: 'KH',
            text: 'Cambodge',
            currency: 'KHR',
            flag: 'https://flagcdn.com/w320/kh.png'
        },
        {
            id: 'CM',
            text: 'Cameroun',
            currency: 'XAF',
            flag: 'https://flagcdn.com/w320/cm.png'
        },
        {
            id: 'CA',
            text: 'Canada',
            currency: 'CAD',
            flag: 'https://flagcdn.com/w320/ca.png'
        },
        {
            id: 'CV',
            text: 'Cap-Vert',
            currency: 'CVE',
            flag: 'https://flagcdn.com/w320/cv.png'
        },
        {
            id: 'CL',
            text: 'Chili',
            currency: 'CLP',
            flag: 'https://flagcdn.com/w320/cl.png'
        },
        {
            id: 'CN',
            text: 'Chine',
            currency: 'CNY',
            flag: 'https://flagcdn.com/w320/cn.png'
        },
        {
            id: 'CY',
            text: 'Chypre',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/cy.png'
        },
        {
            id: 'CO',
            text: 'Colombie',
            currency: 'COP',
            flag: 'https://flagcdn.com/w320/co.png'
        },
        {
            id: 'KM',
            text: 'Comores',
            currency: 'KMF',
            flag: 'https://flagcdn.com/w320/km.png'
        },
        {
            id: 'CG',
            text: 'Congo (-Brazzaville)',
            currency: 'XAF',
            flag: 'https://flagcdn.com/w320/cg.png'
        },
        {
            id: 'CD',
            text: 'Congo (République Démocratique)',
            currency: 'CDF',
            flag: 'https://flagcdn.com/w320/cd.png'
        },
        {
            id: 'KR',
            text: 'Corée du Sud (République de Corée)',
            currency: 'KRW',
            flag: 'https://flagcdn.com/w320/kr.png'
        },
        {
            id: 'KP',
            text: 'Corée (nord)',
            currency: 'KPW',
            flag: 'https://flagcdn.com/w320/kp.png'
        },
        {
            id: 'CR',
            text: 'Costa Rica',
            currency: 'CRC',
            flag: 'https://flagcdn.com/w320/cr.png'
        },
        {
            id: 'CI',
            text: 'Côte d\'Ivoire',
            currency: 'XOF',
            flag: 'https://flagcdn.com/w320/ci.png'
        },
        {
            id: 'HR',
            text: 'Croatie',
            currency: 'HRK',
            flag: 'https://flagcdn.com/w320/hr.png'
        },
        {
            id: 'CU',
            text: 'Cuba',
            currency: 'CUP',
            flag: 'https://flagcdn.com/w320/cu.png'
        },
        {
            id: 'CW',
            text: 'Curaçao',
            currency: 'ANG',
            flag: 'https://flagcdn.com/w320/cw.png'
        },
        {
            id: 'DK',
            text: 'Danemark et îles Féroé',
            currency: 'DKK',
            flag: 'https://flagcdn.com/w320/dk.png'
        },
        {
            id: 'DJ',
            text: 'Djibouti',
            currency: 'DJF',
            flag: 'https://flagcdn.com/w320/dj.png'
        },
        {
            id: 'DM',
            text: 'Dominique',
            currency: 'XCD',
            flag: 'https://flagcdn.com/w320/dm.png'
        },
        {
            id: 'EG',
            text: 'Egypte',
            currency: 'EGP',
            flag: 'https://flagcdn.com/w320/eg.png'
        },
        {
            id: 'SV',
            text: 'El Salvador',
            currency: 'USD',
            flag: 'https://flagcdn.com/w320/sv.png'
        },
        {
            id: 'AE',
            text: 'Emirats Arabes Unis',
            currency: 'AED',
            flag: 'https://flagcdn.com/w320/ae.png'
        },
        {
            id: 'EC',
            text: 'Equateur',
            currency: 'USD',
            flag: 'https://flagcdn.com/w320/ec.png'
        },
        {
            id: 'ER',
            text: 'Erythrée',
            currency: 'ERN',
            flag: 'https://flagcdn.com/w320/er.png'
        },
        {
            id: 'ES',
            text: 'Espagne et Iles Canaries',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/es.png'
        },
        {
            id: 'EE',
            text: 'Estonie',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/ee.png'
        },
        {
            id: 'SZ',
            text: 'eSwatini (Swaziland)',
            currency: 'SZL',
            flag: 'https://flagcdn.com/w320/sz.png'
        },
        {
            id: 'US',
            text: 'États-Unis d\'Amérique',
            currency: 'USD',
            flag: 'https://flagcdn.com/w320/us.png'
        },
        {
            id: 'ET',
            text: 'Ethiopie',
            currency: 'ETB',
            flag: 'https://flagcdn.com/w320/et.png'
        },
        {
            id: 'FJ',
            text: 'Fidji',
            currency: 'FJD',
            flag: 'https://flagcdn.com/w320/fj.png'
        },
        {
            id: 'FI',
            text: 'Finlande',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/fi.png'
        },
        {
            id: 'FR',
            text: 'France',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/fr.png'
        },
        {
            id: 'GA',
            text: 'Gabon',
            currency: 'XAF',
            flag: 'https://flagcdn.com/w320/ga.png'
        },
        {
            id: 'GM',
            text: 'Gambie',
            currency: 'GMD',
            flag: 'https://flagcdn.com/w320/gm.png'
        },
        {
            id: 'GE',
            text: 'Géorgie',
            currency: 'GEL',
            flag: 'https://flagcdn.com/w320/ge.png'
        },
        {
            id: 'GH',
            text: 'Ghana',
            currency: 'GHS',
            flag: 'https://flagcdn.com/w320/gh.png'
        },
        {
            id: 'GI',
            text: 'Gibraltar',
            currency: 'GIP',
            flag: 'https://flagcdn.com/w320/gi.png'
        },
        {
            id: 'GR',
            text: 'Grèce',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/gr.png'
        },
        {
            id: 'GD',
            text: 'Grenade',
            currency: 'XCD',
            flag: 'https://flagcdn.com/w320/gd.png'
        },
        {
            id: 'GL',
            text: 'Groenland',
            currency: 'DKK',
            flag: 'https://flagcdn.com/w320/gl.png'
        },
        {
            id: 'GP',
            text: 'Guadeloupe',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/gp.png'
        },
        {
            id: 'GU',
            text: 'Guam',
            currency: 'USD',
            flag: 'https://flagcdn.com/w320/gu.png'
        },
        {
            id: 'GT',
            text: 'Guatemala',
            currency: 'GTQ',
            flag: 'https://flagcdn.com/w320/gt.png'
        },
        {
            id: 'GW',
            text: 'Guinée-Bissau',
            currency: 'XOF',
            flag: 'https://flagcdn.com/w320/gw.png'
        },
        {
            id: 'GN',
            text: 'Guinée (Conakry)',
            currency: 'GNF',
            flag: 'https://flagcdn.com/w320/gn.png'
        },
        {
            id: 'GQ',
            text: 'Guinée equatoriale',
            currency: 'XAF',
            flag: 'https://flagcdn.com/w320/gq.png'
        },
        {
            id: 'GY',
            text: 'Guyana (Georgetown)',
            currency: 'GYD',
            flag: 'https://flagcdn.com/w320/gy.png'
        },
        {
            id: 'GF',
            text: 'Guyane (Française)',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/gf.png'
        },
        {
            id: 'HT',
            text: 'Haïti',
            currency: 'HTG',
            flag: 'https://flagcdn.com/w320/ht.png'
        },
        {
            id: 'HN',
            text: 'Honduras',
            currency: 'HNL',
            flag: 'https://flagcdn.com/w320/hn.png'
        },
        {
            id: 'HK',
            text: 'Hong Kong',
            currency: 'HKD',
            flag: 'https://flagcdn.com/w320/hk.png'
        },
        {
            id: 'HU',
            text: 'Hongrie',
            currency: 'HUF',
            flag: 'https://flagcdn.com/w320/hu.png'
        },
        {
            id: 'CX',
            text: 'Ile Christmas',
            currency: 'AUD',
            flag: 'https://flagcdn.com/w320/cx.png'
        },
        {
            id: 'KY',
            text: 'Iles Caïmans',
            currency: 'KYD',
            flag: 'https://flagcdn.com/w320/ky.png'
        },
        {
            id: 'CK',
            text: 'Iles Cook',
            currency: 'NZD',
            flag: 'https://flagcdn.com/w320/ck.png'
        },
        {
            id: 'FK',
            text: 'Iles Malouines',
            currency: 'FKP',
            flag: 'https://flagcdn.com/w320/fk.png'
        },
        {
            id: 'MH',
            text: 'Iles Marshall',
            currency: 'USD',
            flag: 'https://flagcdn.com/w320/mh.png'
        },
        {
            id: 'SB',
            text: 'Iles Salomon',
            currency: 'SBD',
            flag: 'https://flagcdn.com/w320/sb.png'
        },
        {
            id: 'VI',
            text: 'Iles Vierges (américaines)',
            currency: 'USD',
            flag: 'https://flagcdn.com/w320/vi.png'
        },
        {
            id: 'VG',
            text: 'Iles Vierges (britanniques)',
            currency: 'USD',
            flag: 'https://flagcdn.com/w320/vg.png'
        },
        {
            id: 'IN',
            text: 'Inde',
            currency: 'INR',
            flag: 'https://flagcdn.com/w320/in.png'
        },
        {
            id: 'ID',
            text: 'Indonésie',
            currency: 'IDR',
            flag: 'https://flagcdn.com/w320/id.png'
        },
        {
            id: 'IQ',
            text: 'Irak',
            currency: 'IQD',
            flag: 'https://flagcdn.com/w320/iq.png'
        },
        {
            id: 'IR',
            text: 'Iran',
            currency: 'IRR',
            flag: 'https://flagcdn.com/w320/ir.png'
        },
        {
            id: 'IE',
            text: 'Irlande',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/ie.png'
        },
        {
            id: 'IS',
            text: 'Islande',
            currency: 'ISK',
            flag: 'https://flagcdn.com/w320/is.png'
        },
        {
            id: 'IL',
            text: 'Israël',
            currency: 'ILS',
            flag: 'https://flagcdn.com/w320/il.png'
        },
        {
            id: 'IT',
            text: 'Italie',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/it.png'
        },
        {
            id: 'JM',
            text: 'Jamaïque',
            currency: 'JMD',
            flag: 'https://flagcdn.com/w320/jm.png'
        },
        {
            id: 'JP',
            text: 'Japon',
            currency: 'JPY',
            flag: 'https://flagcdn.com/w320/jp.png'
        },
        {
            id: 'JO',
            text: 'Jordanie',
            currency: 'JOD',
            flag: 'https://flagcdn.com/w320/jo.png'
        },
        {
            id: 'KZ',
            text: 'Kazakhstan',
            currency: 'KZT',
            flag: 'https://flagcdn.com/w320/kz.png'
        },
        {
            id: 'KE',
            text: 'Kenya',
            currency: 'KES',
            flag: 'https://flagcdn.com/w320/ke.png'
        },
        {
            id: 'KG',
            text: 'Kirghizistan',
            currency: 'KGS',
            flag: 'https://flagcdn.com/w320/kg.png'
        },
        {
            id: 'KI',
            text: 'Kiribati',
            currency: 'AUD',
            flag: 'https://flagcdn.com/w320/ki.png'
        },
        {
            id: 'XK',
            text: 'Kosovo',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/xk.png'
        },
        {
            id: 'KW',
            text: 'Koweït',
            currency: 'KWD',
            flag: 'https://flagcdn.com/w320/kw.png'
        },
        {
            id: 'LA',
            text: 'Laos',
            currency: 'LAK',
            flag: 'https://flagcdn.com/w320/la.png'
        },
        {
            id: 'LS',
            text: 'Lesotho',
            currency: 'LSL',
            flag: 'https://flagcdn.com/w320/ls.png'
        },
        {
            id: 'LV',
            text: 'Lettonie',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/lv.png'
        },
        {
            id: 'LB',
            text: 'Liban',
            currency: 'LBP',
            flag: 'https://flagcdn.com/w320/lb.png'
        },
        {
            id: 'LR',
            text: 'Libéria',
            currency: 'LRD',
            flag: 'https://flagcdn.com/w320/lr.png'
        },
        {
            id: 'LY',
            text: 'Libye',
            currency: 'LYD',
            flag: 'https://flagcdn.com/w320/ly.png'
        },
        {
            id: 'LI',
            text: 'Liechtenstein',
            currency: 'CHF',
            flag: 'https://flagcdn.com/w320/li.png'
        },
        {
            id: 'LT',
            text: 'Lituanie',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/lt.png'
        },
        {
            id: 'LU',
            text: 'Luxembourg',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/lu.png'
        },
        {
            id: 'MO',
            text: 'Macao (Chine)',
            currency: 'MOP',
            flag: 'https://flagcdn.com/w320/mo.png'
        },
        {
            id: 'MK',
            text: 'Macédoine du Nord',
            currency: 'MKD',
            flag: 'https://flagcdn.com/w320/mk.png'
        },
        {
            id: 'MG',
            text: 'Madagascar',
            currency: 'MGA',
            flag: 'https://flagcdn.com/w320/mg.png'
        },
        {
            id: 'MY',
            text: 'Malaisie',
            currency: 'MYR',
            flag: 'https://flagcdn.com/w320/my.png'
        },
        {
            id: 'MW',
            text: 'Malawi',
            currency: 'MWK',
            flag: 'https://flagcdn.com/w320/mw.png'
        },
        {
            id: 'MV',
            text: 'Maldives',
            currency: 'MVR',
            flag: 'https://flagcdn.com/w320/mv.png'
        },
        {
            id: 'ML',
            text: 'Mali',
            currency: 'XOF',
            flag: 'https://flagcdn.com/w320/ml.png'
        },
        {
            id: 'MT',
            text: 'Malte',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/mt.png'
        },
        {
            id: 'MP',
            text: 'Mariannes du Nord (Iles, américaines)',
            currency: 'USD',
            flag: 'https://flagcdn.com/w320/mp.png'
        },
        {
            id: 'MA',
            text: 'Maroc',
            currency: 'MAD',
            flag: 'https://flagcdn.com/w320/ma.png'
        },
        {
            id: 'MQ',
            text: 'Martinique',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/mq.png'
        },
        {
            id: 'MU',
            text: 'Maurice',
            currency: 'MUR',
            flag: 'https://flagcdn.com/w320/mu.png'
        },
        {
            id: 'MR',
            text: 'Mauritanie',
            currency: 'MRU',
            flag: 'https://flagcdn.com/w320/mr.png'
        },
        {
            id: 'YT',
            text: 'Mayotte',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/yt.png'
        },
        {
            id: 'MX',
            text: 'Mexique',
            currency: 'MXN',
            flag: 'https://flagcdn.com/w320/mx.png'
        },
        {
            id: 'FM',
            text: 'Micronésie',
            currency: 'USD',
            flag: 'https://flagcdn.com/w320/fm.png'
        },
        {
            id: 'MD',
            text: 'Moldova',
            currency: 'MDL',
            flag: 'https://flagcdn.com/w320/md.png'
        },
        {
            id: 'MC',
            text: 'Monaco',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/mc.png'
        },
        {
            id: 'MN',
            text: 'Mongolie',
            currency: 'MNT',
            flag: 'https://flagcdn.com/w320/mn.png'
        },
        {
            id: 'ME',
            text: 'Monténégro',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/me.png'
        },
        {
            id: 'MS',
            text: 'Montserrat (britannique)',
            currency: 'XCD',
            flag: 'https://flagcdn.com/w320/ms.png'
        },
        {
            id: 'MZ',
            text: 'Mozambique',
            currency: 'MZN',
            flag: 'https://flagcdn.com/w320/mz.png'
        },
        {
            id: 'MM',
            text: 'Myanmar',
            currency: 'MMK',
            flag: 'https://flagcdn.com/w320/mm.png'
        },
        {
            id: 'NA',
            text: 'Namibie',
            currency: 'NAD',
            flag: 'https://flagcdn.com/w320/na.png'
        },
        {
            id: 'NR',
            text: 'Nauru',
            currency: 'AUD',
            flag: 'https://flagcdn.com/w320/nr.png'
        },
        {
            id: 'NP',
            text: 'Népal',
            currency: 'NPR',
            flag: 'https://flagcdn.com/w320/np.png'
        },
        {
            id: 'NI',
            text: 'Nicaragua',
            currency: 'NIO',
            flag: 'https://flagcdn.com/w320/ni.png'
        },
        {
            id: 'NE',
            text: 'Niger',
            currency: 'XOF',
            flag: 'https://flagcdn.com/w320/ne.png'
        },
        {
            id: 'NG',
            text: 'Nigéria',
            currency: 'NGN',
            flag: 'https://flagcdn.com/w320/ng.png'
        },
        {
            id: 'NU',
            text: 'Niue',
            currency: 'NZD',
            flag: 'https://flagcdn.com/w320/nu.png'
        },
        {
            id: 'NO',
            text: 'Norvège',
            currency: 'NOK',
            flag: 'https://flagcdn.com/w320/no.png'
        },
        {
            id: 'NC',
            text: 'Nouvelle-Calédonie',
            currency: 'XPF',
            flag: 'https://flagcdn.com/w320/nc.png'
        },
        {
            id: 'NZ',
            text: 'Nouvelle-Zélande',
            currency: 'NZD',
            flag: 'https://flagcdn.com/w320/nz.png'
        },
        {
            id: 'OM',
            text: 'Oman',
            currency: 'OMR',
            flag: 'https://flagcdn.com/w320/om.png'
        },
        {
            id: 'UG',
            text: 'Ouganda',
            currency: 'UGX',
            flag: 'https://flagcdn.com/w320/ug.png'
        },
        {
            id: 'UZ',
            text: 'Ouzbékistan',
            currency: 'UZS',
            flag: 'https://flagcdn.com/w320/uz.png'
        },
        {
            id: 'PK',
            text: 'Pakistan',
            currency: 'PKR',
            flag: 'https://flagcdn.com/w320/pk.png'
        },
        {
            id: 'PW',
            text: 'Palau',
            currency: 'USD',
            flag: 'https://flagcdn.com/w320/pw.png'
        },
        {
            id: 'PS',
            text: 'Palestine',
            currency: 'ILS',
            flag: 'https://flagcdn.com/w320/ps.png'
        },
        {
            id: 'PA',
            text: 'Panama',
            currency: 'PAB',
            flag: 'https://flagcdn.com/w320/pa.png'
        },
        {
            id: 'PG',
            text: 'Papouasie-Nouvelle-Guinée',
            currency: 'PGK',
            flag: 'https://flagcdn.com/w320/pg.png'
        },
        {
            id: 'PY',
            text: 'Paraguay',
            currency: 'PYG',
            flag: 'https://flagcdn.com/w320/py.png'
        },
        {
            id: 'NL',
            text: 'Pays-Bas',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/nl.png'
        },
        {
            id: 'PE',
            text: 'Pérou',
            currency: 'PEN',
            flag: 'https://flagcdn.com/w320/pe.png'
        },
        {
            id: 'PH',
            text: 'Philippines',
            currency: 'PHP',
            flag: 'https://flagcdn.com/w320/ph.png'
        },
        {
            id: 'PN',
            text: 'Pitcairn',
            currency: 'NZD',
            flag: 'https://flagcdn.com/w320/pn.png'
        },
        {
            id: 'PL',
            text: 'Pologne',
            currency: 'PLN',
            flag: 'https://flagcdn.com/w320/pl.png'
        },
        {
            id: 'PF',
            text: 'Polynésie (français)',
            currency: 'XPF',
            flag: 'https://flagcdn.com/w320/pf.png'
        },
        {
            id: 'PR',
            text: 'Porto Rico',
            currency: 'USD',
            flag: 'https://flagcdn.com/w320/pr.png'
        },
        {
            id: 'PT',
            text: 'Portugal, Açores, Madère',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/pt.png'
        },
        {
            id: 'QA',
            text: 'Qatar',
            currency: 'QAR',
            flag: 'https://flagcdn.com/w320/qa.png'
        },
        {
            id: 'CF',
            text: 'République Centrafricaine',
            currency: 'XAF',
            flag: 'https://flagcdn.com/w320/cf.png'
        },
        {
            id: 'DO',
            text: 'République Dominicaine',
            currency: 'DOP',
            flag: 'https://flagcdn.com/w320/do.png'
        },
        {
            id: 'CZ',
            text: 'République tchèque',
            currency: 'CZK',
            flag: 'https://flagcdn.com/w320/cz.png'
        },
        {
            id: 'RE',
            text: 'Réunion',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/re.png'
        },
        {
            id: 'RO',
            text: 'Roumanie',
            currency: 'RON',
            flag: 'https://flagcdn.com/w320/ro.png'
        },
        {
            id: 'GB',
            text: 'Royaume-Uni',
            currency: 'GBP',
            flag: 'https://flagcdn.com/w320/gb.png'
        },
        {
            id: 'RU',
            text: 'Russie',
            currency: 'RUB',
            flag: 'https://flagcdn.com/w320/ru.png'
        },
        {
            id: 'RW',
            text: 'Rwanda',
            currency: 'RWF',
            flag: 'https://flagcdn.com/w320/rw.png'
        },
        {
            id: 'EH',
            text: 'Sahara occidental',
            currency: 'MAD',
            flag: 'https://flagcdn.com/w320/eh.png'
        },
        {
            id: 'BL',
            text: 'Saint-Barthélemy',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/bl.png'
        },
        {
            id: 'KN',
            text: 'Saint-Christophe-et-Niévès',
            currency: 'XCD',
            flag: 'https://flagcdn.com/w320/kn.png'
        },
        {
            id: 'BQ',
            text: 'Saint-Eustache et Saba',
            currency: 'USD',
            flag: 'https://flagcdn.com/w320/bq.png'
        },
        {
            id: 'SM',
            text: 'Saint-Marin',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/sm.png'
        },
        {
            id: 'MF',
            text: 'Saint-Martin (France)',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/mf.png'
        },
        {
            id: 'SX',
            text: 'Saint-Martin (Pays-Bas)',
            currency: 'ANG',
            flag: 'https://flagcdn.com/w320/sx.png'
        },
        {
            id: 'PM',
            text: 'Saint-Pierre-et-Miquelon',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/pm.png'
        },
        {
            id: 'VC',
            text: 'Saint-Vincent-et-les-Grenadines',
            currency: 'XCD',
            flag: 'https://flagcdn.com/w320/vc.png'
        },
        {
            id: 'SH',
            text: 'Sainte-Hélène - Tristan Da Cunha - Ascension',
            currency: 'SHP',
            flag: 'https://flagcdn.com/w320/sh.png'
        },
        {
            id: 'LC',
            text: 'Sainte-Lucie',
            currency: 'XCD',
            flag: 'https://flagcdn.com/w320/lc.png'
        },
        {
            id: 'WS',
            text: 'Samoa',
            currency: 'WST',
            flag: 'https://flagcdn.com/w320/ws.png'
        },
        {
            id: 'AS',
            text: 'Samoa (Américain)',
            currency: 'USD',
            flag: 'https://flagcdn.com/w320/as.png'
        },
        {
            id: 'ST',
            text: 'Sao Tomé et Principe',
            currency: 'STN',
            flag: 'https://flagcdn.com/w320/st.png'
        },
        {
            id: 'SN',
            text: 'Sénégal',
            currency: 'XOF',
            flag: 'https://flagcdn.com/w320/sn.png'
        },
        {
            id: 'RS',
            text: 'Serbie',
            currency: 'RSD',
            flag: 'https://flagcdn.com/w320/rs.png'
        },
        {
            id: 'SC',
            text: 'Seychelles',
            currency: 'SCR',
            flag: 'https://flagcdn.com/w320/sc.png'
        },
        {
            id: 'SL',
            text: 'Sierra Leone',
            currency: 'SLL',
            flag: 'https://flagcdn.com/w320/sl.png'
        },
        {
            id: 'SG',
            text: 'Singapour',
            currency: 'SGD',
            flag: 'https://flagcdn.com/w320/sg.png'
        },
        {
            id: 'SK',
            text: 'Slovaquie',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/sk.png'
        },
        {
            id: 'SI',
            text: 'Slovénie',
            currency: 'EUR',
            flag: 'https://flagcdn.com/w320/si.png'
        },
        {
            id: 'SO',
            text: 'Somalie',
            currency: 'SOS',
            flag: 'https://flagcdn.com/w320/so.png'
        },
        {
            id: 'SD',
            text: 'Soudan',
            currency: 'SDG',
            flag: 'https://flagcdn.com/w320/sd.png'
        },
        {
            id: 'SS',
            text: 'Soudan du Sud',
            currency: 'SSP',
            flag: 'https://flagcdn.com/w320/ss.png'
        },
        {
            id: 'LK',
            text: 'Sri Lanka',
            currency: 'LKR',
            flag: 'https://flagcdn.com/w320/lk.png'
        },
        {
            id: 'SE',
            text: 'Suède',
            currency: 'SEK',
            flag: 'https://flagcdn.com/w320/se.png'
        },
        {
            id: 'CH',
            text: 'Suisse',
            currency: 'CHF',
            flag: 'https://flagcdn.com/w320/ch.png'
        },
        {
            id: 'SR',
            text: 'Suriname',
            currency: 'SRD',
            flag: 'https://flagcdn.com/w320/sr.png'
        },
        {
            id: 'SY',
            text: 'Syrie',
            currency: 'SYP',
            flag: 'https://flagcdn.com/w320/sy.png'
        },
        {
            id: 'TJ',
            text: 'Tadjikistan',
            currency: 'TJS',
            flag: 'https://flagcdn.com/w320/tj.png'
        },
        {
            id: 'TW',
            text: 'Taiwan',
            currency: 'TWD',
            flag: 'https://flagcdn.com/w320/tw.png'
        },
        {
            id: 'TZ',
            text: 'Tanzanie',
            currency: 'TZS',
            flag: 'https://flagcdn.com/w320/tz.png'
        },
        {
            id: 'TD',
            text: 'Tchad',
            currency: 'XAF',
            flag: 'https://flagcdn.com/w320/td.png'
        },
        {
            id: 'TH',
            text: 'Thaïlande',
            currency: 'THB',
            flag: 'https://flagcdn.com/w320/th.png'
        },
        {
            id: 'TL',
            text: 'Timor oriental',
            currency: 'USD',
            flag: 'https://flagcdn.com/w320/tl.png'
        },
        {
            id: 'TG',
            text: 'Togo',
            currency: 'XOF',
            flag: 'https://flagcdn.com/w320/tg.png'
        },
        {
            id: 'TK',
            text: 'Tokelau (Nouvelle-Zélande)',
            currency: 'NZD',
            flag: 'https://flagcdn.com/w320/tk.png'
        },
        {
            id: 'TO',
            text: 'Tonga',
            currency: 'TOP',
            flag: 'https://flagcdn.com/w320/to.png'
        },
        {
            id: 'TT',
            text: 'Trinité et Tobago',
            currency: 'TTD',
            flag: 'https://flagcdn.com/w320/tt.png'
        },
        {
            id: 'TN',
            text: 'Tunisie',
            currency: 'TND',
            flag: 'https://flagcdn.com/w320/tn.png'
        },
        {
            id: 'TM',
            text: 'Turkménistan',
            currency: 'TMT',
            flag: 'https://flagcdn.com/w320/tm.png'
        },
        {
            id: 'TC',
            text: 'Turques-et-Caïques (britanniques)',
            currency: 'USD',
            flag: 'https://flagcdn.com/w320/tc.png'
        },
        {
            id: 'TR',
            text: 'Turquie',
            currency: 'TRY',
            flag: 'https://flagcdn.com/w320/tr.png'
        },
        {
            id: 'TV',
            text: 'Tuvalu',
            currency: 'AUD',
            flag: 'https://flagcdn.com/w320/tv.png'
        },
        {
            id: 'UA',
            text: 'Ukraine',
            currency: 'UAH',
            flag: 'https://flagcdn.com/w320/ua.png'
        },
        {
            id: 'UY',
            text: 'Uruguay',
            currency: 'UYU',
            flag: 'https://flagcdn.com/w320/uy.png'
        },
        {
            id: 'VU',
            text: 'Vanuatu',
            currency: 'VUV',
            flag: 'https://flagcdn.com/w320/vu.png'
        },
        {
            id: 'VE',
            text: 'Venezuela',
            currency: 'VES',
            flag: 'https://flagcdn.com/w320/ve.png'
        },
        {
            id: 'VN',
            text: 'Vietnam',
            currency: 'VND',
            flag: 'https://flagcdn.com/w320/vn.png'
        },
        {
            id: 'WF',
            text: 'Wallis-et-Futuna',
            currency: 'XPF',
            flag: 'https://flagcdn.com/w320/wf.png'
        },
        {
            id: 'YE',
            text: 'Yémen',
            currency: 'YER',
            flag: 'https://flagcdn.com/w320/ye.png'
        },
        {
            id: 'ZM',
            text: 'Zambie',
            currency: 'ZMW',
            flag: 'https://flagcdn.com/w320/zm.png'
        },
        {
            id: 'ZW',
            text: 'Zimbabwe',
            currency: 'ZWL',
            flag: 'https://flagcdn.com/w320/zw.png'
        },

        ];
            const $select = $('#template');
            const $flag = $('#flag');
            const $currency = $('#devise');

            countries.forEach(country => {
                if (country.id) {
                    const $option = $(`<option value="${country.id}" data-currency="${country.currency}" data-flag="${country.flag}">${country.text}</option>`);
                    $select.append($option);
                }
            });

            $select.on('change', function() {
                const selectedOption = $(this).find('option:selected');
                const flagUrl = selectedOption.data('flag');
                $flag.attr('src', flagUrl);
                $('#devise').val(selectedOption.data('currency'));

            });

            // Trigger change event to display flag of the first option on page load
            $select.trigger('change');
       
       
       
       
            $('.flag-icon').each(function() {
            var countryId = $(this).data('country');
            console.log("zbi")
            var country = countries.find(function(c) {
              return c.id === countryId;
            });

        $(this).attr('src', country.flag);
        });
       
        });
          
        </script>
<!-- script pour  statut-->
 
<script>
    window.addEventListener('load', function () {
        const selects = document.querySelectorAll('.status-select');

        if (selects.length === 0) {
            console.error('No status-select elements found');
        }

        selects.forEach(select => {
            select.addEventListener('change', function (event) {
                console.log("Hey i changed")
                const produitId = event.target.getAttribute('data-produit-id');
                if (!produitId) {
                    console.error('Produit ID not found');
                    return;
                }

                const newStatus = event.target.value;

                fetch(`/update-produit-status/${produitId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        statut: newStatus
                    })
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            const statusSpan = event.target.closest('.status-container').querySelector('.status');
                            statusSpan.textContent = newStatus.charAt(0) + newStatus.slice(1).toLowerCase();
                            statusSpan.className = `status ${newStatus.toLowerCase()}`;
                        } else {
                            alert('Failed to update status');
                        }
                    })
                    .catch(error => {
                        console.error('Error updating status:', error);
                    });
            });
        });
    });
</script>
<!-- script pour la bar de recherch -->




<!-- script pour les images de produit logo et image description  -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var productInput = document.getElementById('image_produit');
        var logoInput = document.getElementById('logo');
        var imageDescriptionInput = document.getElementById('image_description');
        var selectedFiles = [];

        productInput.addEventListener('change', function (e) {
            var label = this.nextElementSibling;
            var files = Array.from(this.files);

            selectedFiles = selectedFiles.concat(files);

            if (selectedFiles.length > 6) {
                alert('Vous pouvez sélectionner un maximum de 6 images.');
                selectedFiles = selectedFiles.slice(0, 6);
            }

            label.textContent = 'Choisir des images';

            // Afficher les images sélectionnées
            var selectedImagesContainer = document.getElementById('selected-images');
            selectedImagesContainer.innerHTML = '';
            selectedFiles.forEach(function (file) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    selectedImagesContainer.appendChild(img);
                };
                reader.readAsDataURL(file);
            });
        });

        logoInput.addEventListener('change', function (e) {
            var label = this.nextElementSibling;
            var file = this.files[0];

            if (!file) return;

            label.textContent = 'Choisir un logo';

            // Afficher l'image sélectionnée
            var selectedLogoContainer = document.getElementById('selected-logo');
            selectedLogoContainer.innerHTML = '';
            var reader = new FileReader();
            reader.onload = function (e) {
                var img = document.createElement('img');
                img.src = e.target.result;
                selectedLogoContainer.appendChild(img);
            };
            reader.readAsDataURL(file);
        });

        imageDescriptionInput.addEventListener('change', function (e) {
            var label = this.nextElementSibling;
            var files = Array.from(this.files);

            if (files.length > 2) {
                alert('Vous pouvez sélectionner un maximum de 2 images.');
                imageDescriptionInput.value = '';
                return;
            }

            label.textContent = 'Choisir des images';

            // Afficher les images sélectionnées
            var selectedImageDescriptionContainer = document.getElementById('selected-image-description');
            selectedImageDescriptionContainer.innerHTML = '';
            files.forEach(function (file) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    selectedImageDescriptionContainer.appendChild(img);
                };
                reader.readAsDataURL(file);
            });
        });
    });
</script>


<!-- script de les image de review -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var imageReviewsInput = document.getElementById('image_reviews');
        var selectedFiles = [];

        imageReviewsInput.addEventListener('change', function (e) {
            var label = this.nextElementSibling;
            var files = Array.from(this.files);

            selectedFiles = selectedFiles.concat(files);

            label.textContent = 'Choisir des images';

            var selectedImagesContainer = document.getElementById('selected-reviews-images');
            selectedImagesContainer.innerHTML = '';
            selectedFiles.forEach(function (file) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    selectedImagesContainer.appendChild(img);
                };
                reader.readAsDataURL(file);
            });
        });
    });
</script>


<!-- script de l'input REVIEWS PRINCIPALE et QUALITE  et REVIEWS  -->



<!--script de geo  -->

<script>
  

    $('#form-id').on('submit', function (event) {
        event.preventDefault();
        updatePreview();
        this.submit();
    });

    function updatePreview() {

        var formData = new FormData($('#form-id')[0]);
        console.log(formData)

        fetch("{{ route('produit.preview') }}", {
            method: 'POST',
            body: formData
        })
            .then(response => response.text())
            .then(html => {
                var previewContainer = $('#template-preview');
                if (previewContainer.length) {
                    previewContainer.html(html);

                    var selectedCountryId = $('#geo').val();
                    var selectedCountry = countries.find(country => country.id === selectedCountryId);

                    var flagElement = $('#template-preview').find('#flag');
                    if (flagElement.length) {
                        flagElement.attr('src', selectedCountry.flag).attr('data-country', selectedCountry.id).show();
                    }


          
    

           
                   
                } else {
                    console.error('Conteneur de prévisualisation non trouvé.');
                }
            })
            .catch(error => {
                console.error('Erreur lors de la prévisualisation:', error);
            });



    }


    
</script>

<script>
    // JavaScript pour la confirmation de suppression avec SweetAlert2
    function confirmDelete(productId) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(`deleteForm-${productId}`).submit();
            }
        });
    }
</script>

<script>
    var form = document.getElementById('form-id');

    if (form) {
        

        form.addEventListener('change', function () {
            updatePreview();
        });

        form.addEventListener('submit', function (event) {
            event.preventDefault();
            updatePreview();
            this.submit();
        });
    } else {
        console.error('Le formulaire avec l\'ID form-id n\'a pas été trouvé.');
    }

    
</script>
<script>
        // JavaScript to clear inputs on page load
        window.onload = function() {
            document.getElementById('form-id').reset();
        };
    </script>


@stack('js')