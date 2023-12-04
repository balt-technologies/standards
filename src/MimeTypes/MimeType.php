<?php

namespace Standards\MimeTypes;

enum MimeType: string
{
    case JSON = 'application/json';
    case PDF = 'application/pdf';
    case XML = 'application/xml';
    case RTF = 'application/rtf';

    /* Fonts  */
    case TTF = 'font/ttf';
    case WOFF = 'font/woff';
    case WOFF2 = 'font/woff2';

    /* Text formats  */
    case CSV = 'text/csv';
    case HTML = 'text/html';
    case TXT = 'text/plain';

    /* Image types */
    case GIF = 'image/gif';
    case JPEG = 'image/jpeg';
    case PNG = 'image/png';
    case SVG = 'image/svg+xml';
    case TIFF = 'image/tiff';
    case WEBP = 'image/webp';

    /* Office formats  */
    case XLS = 'application/vnd.ms-excel';
    case XLSX = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
    case DOC = 'application/msword';
    case DOCX = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
    case PPT = 'application/vnd.ms-powerpoint';
    case PPTX = 'application/vnd.openxmlformats-officedocument.presentationml.presentation';
    case ODP = 'application/vnd.oasis.opendocument.presentation';
    case ODS = 'application/vnd.oasis.opendocument.spreadsheet';
    case ODT = 'application/vnd.oasis.opendocument.text';
}
