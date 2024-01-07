<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <meta name="theme-color" content="#000000">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-navbutton-color" content="#000000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000000">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/779/favicon/favicon-1933674734.png">
    <!-- Canonical -->
    <link rel="canonical" href="{{ route('mahacuan.tarik_dana') }}">
    <!-- End Canonical -->
    <link rel="preload" as="font"
        href="{{ asset('/') }}template_mahacuan/themes/1/font/font-awesome/webfonts/fa-solid-900.woff2" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" as="font"
        href="{{ asset('/') }}template_mahacuan/themes/1/font/font-awesome/webfonts/fa-brands-400.woff2" type="font/woff2"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}template_mahacuan/themes/1/css/global.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}template_mahacuan/themes/1/font/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/') }}template_mahacuan/themes/1/vendor/dateranngepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css"
        href="https://mahacuan.live/themes/1/vendor/dataTables/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/') }}template_mahacuan/themes/1/vendor/dataTables/responsive.dataTables.min.css">
    <link rel="stylesheet" id="templateStyle" type="text/css" href="{{ asset('/') }}template_mahacuan/custom/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}template_mahacuan/themes/1/sass/custom.css">
    <style>
        .swal2-popup.swal2-toast {
            flex-direction: row;
            align-items: center;
            width: auto;
            padding: .625em;
            overflow-y: hidden;
            background: #fff;
            box-shadow: 0 0 .625em #d9d9d9
        }

        .swal2-popup.swal2-toast .swal2-header {
            flex-direction: row;
            padding: 0
        }

        .swal2-popup.swal2-toast .swal2-title {
            flex-grow: 1;
            justify-content: flex-start;
            margin: 0 .6em;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-footer {
            margin: .5em 0 0;
            padding: .5em 0 0;
            font-size: .8em
        }

        .swal2-popup.swal2-toast .swal2-close {
            position: static;
            width: .8em;
            height: .8em;
            line-height: .8
        }

        .swal2-popup.swal2-toast .swal2-content {
            justify-content: flex-start;
            padding: 0;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-icon {
            width: 2em;
            min-width: 2em;
            height: 2em;
            margin: 0
        }

        .swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
            display: flex;
            align-items: center;
            font-size: 1.8em;
            font-weight: 700
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            .swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
                font-size: .25em
            }
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            top: .875em;
            width: 1.375em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: .3125em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: .3125em
        }

        .swal2-popup.swal2-toast .swal2-actions {
            flex-basis: auto !important;
            width: auto;
            height: auto;
            margin: 0 .3125em
        }

        .swal2-popup.swal2-toast .swal2-styled {
            margin: 0 .3125em;
            padding: .3125em .625em;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-styled:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(50, 100, 150, .4)
        }

        .swal2-popup.swal2-toast .swal2-success {
            border-color: #a5dc86
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 1.6em;
            height: 3em;
            transform: rotate(45deg);
            border-radius: 50%
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -.8em;
            left: -.5em;
            transform: rotate(-45deg);
            transform-origin: 2em 2em;
            border-radius: 4em 0 0 4em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -.25em;
            left: .9375em;
            transform-origin: 0 1.5em;
            border-radius: 0 4em 4em 0
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
            top: 0;
            left: .4375em;
            width: .4375em;
            height: 2.6875em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
            height: .3125em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
            top: 1.125em;
            left: .1875em;
            width: .75em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
            top: .9375em;
            right: .1875em;
            width: 1.375em
        }

        .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip {
            -webkit-animation: swal2-toast-animate-success-line-tip .75s;
            animation: swal2-toast-animate-success-line-tip .75s
        }

        .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long {
            -webkit-animation: swal2-toast-animate-success-line-long .75s;
            animation: swal2-toast-animate-success-line-long .75s
        }

        .swal2-popup.swal2-toast.swal2-show {
            -webkit-animation: swal2-toast-show .5s;
            animation: swal2-toast-show .5s
        }

        .swal2-popup.swal2-toast.swal2-hide {
            -webkit-animation: swal2-toast-hide .1s forwards;
            animation: swal2-toast-hide .1s forwards
        }

        .swal2-container {
            display: flex;
            position: fixed;
            z-index: 1060;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            padding: .625em;
            overflow-x: hidden;
            transition: background-color .1s;
            -webkit-overflow-scrolling: touch
        }

        .swal2-container.swal2-backdrop-show,
        .swal2-container.swal2-noanimation {
            background: rgba(0, 0, 0, .4)
        }

        .swal2-container.swal2-backdrop-hide {
            background: 0 0 !important
        }

        .swal2-container.swal2-top {
            align-items: flex-start
        }

        .swal2-container.swal2-top-left,
        .swal2-container.swal2-top-start {
            align-items: flex-start;
            justify-content: flex-start
        }

        .swal2-container.swal2-top-end,
        .swal2-container.swal2-top-right {
            align-items: flex-start;
            justify-content: flex-end
        }

        .swal2-container.swal2-center {
            align-items: center
        }

        .swal2-container.swal2-center-left,
        .swal2-container.swal2-center-start {
            align-items: center;
            justify-content: flex-start
        }

        .swal2-container.swal2-center-end,
        .swal2-container.swal2-center-right {
            align-items: center;
            justify-content: flex-end
        }

        .swal2-container.swal2-bottom {
            align-items: flex-end
        }

        .swal2-container.swal2-bottom-left,
        .swal2-container.swal2-bottom-start {
            align-items: flex-end;
            justify-content: flex-start
        }

        .swal2-container.swal2-bottom-end,
        .swal2-container.swal2-bottom-right {
            align-items: flex-end;
            justify-content: flex-end
        }

        .swal2-container.swal2-bottom-end>:first-child,
        .swal2-container.swal2-bottom-left>:first-child,
        .swal2-container.swal2-bottom-right>:first-child,
        .swal2-container.swal2-bottom-start>:first-child,
        .swal2-container.swal2-bottom>:first-child {
            margin-top: auto
        }

        .swal2-container.swal2-grow-fullscreen>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-self: stretch;
            justify-content: center
        }

        .swal2-container.swal2-grow-row>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-content: center;
            justify-content: center
        }

        .swal2-container.swal2-grow-column {
            flex: 1;
            flex-direction: column
        }

        .swal2-container.swal2-grow-column.swal2-bottom,
        .swal2-container.swal2-grow-column.swal2-center,
        .swal2-container.swal2-grow-column.swal2-top {
            align-items: center
        }

        .swal2-container.swal2-grow-column.swal2-bottom-left,
        .swal2-container.swal2-grow-column.swal2-bottom-start,
        .swal2-container.swal2-grow-column.swal2-center-left,
        .swal2-container.swal2-grow-column.swal2-center-start,
        .swal2-container.swal2-grow-column.swal2-top-left,
        .swal2-container.swal2-grow-column.swal2-top-start {
            align-items: flex-start
        }

        .swal2-container.swal2-grow-column.swal2-bottom-end,
        .swal2-container.swal2-grow-column.swal2-bottom-right,
        .swal2-container.swal2-grow-column.swal2-center-end,
        .swal2-container.swal2-grow-column.swal2-center-right,
        .swal2-container.swal2-grow-column.swal2-top-end,
        .swal2-container.swal2-grow-column.swal2-top-right {
            align-items: flex-end
        }

        .swal2-container.swal2-grow-column>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-content: center;
            justify-content: center
        }

        .swal2-container.swal2-no-transition {
            transition: none !important
        }

        .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal {
            margin: auto
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            .swal2-container .swal2-modal {
                margin: 0 !important
            }
        }

        .swal2-popup {
            display: none;
            position: relative;
            box-sizing: border-box;
            flex-direction: column;
            justify-content: center;
            width: 32em;
            max-width: 100%;
            padding: 1.25em;
            border: none;
            border-radius: .3125em;
            background: #fff;
            font-family: inherit;
            font-size: 1rem
        }

        .swal2-popup:focus {
            outline: 0
        }

        .swal2-popup.swal2-loading {
            overflow-y: hidden
        }

        .swal2-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0 1.8em
        }

        .swal2-title {
            position: relative;
            max-width: 100%;
            margin: 0 0 .4em;
            padding: 0;
            color: #595959;
            font-size: 1em;
            font-weight: 600;
            text-align: center;
            text-transform: none;
            word-wrap: break-word
        }

        .swal2-actions {
            display: flex;
            z-index: 1;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin: 1.25em auto 0
        }

        .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
            opacity: .4
        }

        .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
            background-image: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1))
        }

        .swal2-actions:not(.swal2-loading) .swal2-styled:active {
            background-image: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2))
        }

        .swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
            box-sizing: border-box;
            width: 2.5em;
            height: 2.5em;
            margin: .46875em;
            padding: 0;
            -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            border: .25em solid transparent;
            border-radius: 100%;
            border-color: transparent;
            background-color: transparent !important;
            color: transparent !important;
            cursor: default;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
            margin-right: 30px;
            margin-left: 30px
        }

        .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after {
            content: "";
            display: inline-block;
            width: 15px;
            height: 15px;
            margin-left: 5px;
            -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            border: 3px solid #999;
            border-radius: 50%;
            border-right-color: transparent;
            box-shadow: 1px 1px 1px #fff
        }

        .swal2-styled {
            margin: .3125em;
            padding: .625em 2em;
            box-shadow: none;
            font-weight: 500
        }

        .swal2-styled:not([disabled]) {
            cursor: pointer
        }

        .swal2-styled.swal2-confirm {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #3085d6;
            color: #fff;
            font-size: 1.0625em
        }

        .swal2-styled.swal2-cancel {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #aaa;
            color: #fff;
            font-size: 1.0625em
        }

        .swal2-styled:focus {
            outline: 0;
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(50, 100, 150, .4)
        }

        .swal2-styled::-moz-focus-inner {
            border: 0
        }

        .swal2-footer {
            justify-content: center;
            margin: 1.25em 0 0;
            padding: 1em 0 0;
            border-top: 1px solid #eee;
            color: #545454;
            font-size: 1em
        }

        .swal2-timer-progress-bar-container {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            height: .25em;
            overflow: hidden;
            border-bottom-right-radius: .3125em;
            border-bottom-left-radius: .3125em
        }

        .swal2-timer-progress-bar {
            width: 100%;
            height: .25em;
            background: rgba(0, 0, 0, .2)
        }

        .swal2-image {
            max-width: 100%;
            margin: 1.25em auto
        }

        .swal2-close {
            position: absolute;
            z-index: 2;
            top: 0;
            right: 0;
            align-items: center;
            justify-content: center;
            width: 1.2em;
            height: 1.2em;
            padding: 0;
            overflow: hidden;
            transition: color .1s ease-out;
            border: none;
            border-radius: 0;
            background: 0 0;
            color: #ccc;
            font-family: serif;
            font-size: 2.5em;
            line-height: 1.2;
            cursor: pointer
        }

        .swal2-close:hover {
            transform: none;
            background: 0 0;
            color: #f27474
        }

        .swal2-close::-moz-focus-inner {
            border: 0
        }

        .swal2-content {
            z-index: 1;
            justify-content: center;
            margin: 0;
            padding: 0 1.6em;
            color: #545454;
            font-size: 1.125em;
            font-weight: 400;
            line-height: normal;
            text-align: center;
            word-wrap: break-word
        }

        .swal2-checkbox,
        .swal2-file,
        .swal2-input,
        .swal2-radio,
        .swal2-select,
        .swal2-textarea {
            margin: 1em auto
        }

        .swal2-file,
        .swal2-input,
        .swal2-textarea {
            box-sizing: border-box;
            width: 100%;
            transition: border-color .3s, box-shadow .3s;
            border: 1px solid #d9d9d9;
            border-radius: .1875em;
            background: inherit;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06);
            color: inherit;
            font-size: 1.125em
        }

        .swal2-file.swal2-inputerror,
        .swal2-input.swal2-inputerror,
        .swal2-textarea.swal2-inputerror {
            border-color: #f27474 !important;
            box-shadow: 0 0 2px #f27474 !important
        }

        .swal2-file:focus,
        .swal2-input:focus,
        .swal2-textarea:focus {
            border: 1px solid #b4dbed;
            outline: 0;
            box-shadow: 0 0 3px #c4e6f5
        }

        .swal2-file::-moz-placeholder,
        .swal2-input::-moz-placeholder,
        .swal2-textarea::-moz-placeholder {
            color: #ccc
        }

        .swal2-file:-ms-input-placeholder,
        .swal2-input:-ms-input-placeholder,
        .swal2-textarea:-ms-input-placeholder {
            color: #ccc
        }

        .swal2-file::-ms-input-placeholder,
        .swal2-input::-ms-input-placeholder,
        .swal2-textarea::-ms-input-placeholder {
            color: #ccc
        }

        .swal2-file::placeholder,
        .swal2-input::placeholder,
        .swal2-textarea::placeholder {
            color: #ccc
        }

        .swal2-range {
            margin: 1em auto;
            background: #fff
        }

        .swal2-range input {
            width: 80%
        }

        .swal2-range output {
            width: 20%;
            color: inherit;
            font-weight: 600;
            text-align: center
        }

        .swal2-range input,
        .swal2-range output {
            height: 2.625em;
            padding: 0;
            font-size: 1.125em;
            line-height: 2.625em
        }

        .swal2-input {
            height: 2.625em;
            padding: 0 .75em
        }

        .swal2-input[type=number] {
            max-width: 10em
        }

        .swal2-file {
            background: inherit;
            font-size: 1.125em
        }

        .swal2-textarea {
            height: 6.75em;
            padding: .75em
        }

        .swal2-select {
            min-width: 50%;
            max-width: 100%;
            padding: .375em .625em;
            background: inherit;
            color: inherit;
            font-size: 1.125em
        }

        .swal2-checkbox,
        .swal2-radio {
            align-items: center;
            justify-content: center;
            background: #fff;
            color: inherit
        }

        .swal2-checkbox label,
        .swal2-radio label {
            margin: 0 .6em;
            font-size: 1.125em
        }

        .swal2-checkbox input,
        .swal2-radio input {
            margin: 0 .4em
        }

        .swal2-validation-message {
            display: none;
            align-items: center;
            justify-content: center;
            padding: .625em;
            overflow: hidden;
            background: #f0f0f0;
            color: #666;
            font-size: 1em;
            font-weight: 300
        }

        .swal2-validation-message::before {
            content: "!";
            display: inline-block;
            width: 1.5em;
            min-width: 1.5em;
            height: 1.5em;
            margin: 0 .625em;
            border-radius: 50%;
            background-color: #f27474;
            color: #fff;
            font-weight: 600;
            line-height: 1.5em;
            text-align: center
        }

        .swal2-icon {
            position: relative;
            box-sizing: content-box;
            justify-content: center;
            width: 5em;
            height: 5em;
            margin: 1.25em auto 1.875em;
            border: .25em solid transparent;
            border-radius: 50%;
            font-family: inherit;
            line-height: 5em;
            cursor: default;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .swal2-icon .swal2-icon-content {
            display: flex;
            align-items: center;
            font-size: 3.75em
        }

        .swal2-icon.swal2-error {
            border-color: #f27474;
            color: #f27474
        }

        .swal2-icon.swal2-error .swal2-x-mark {
            position: relative;
            flex-grow: 1
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            display: block;
            position: absolute;
            top: 2.3125em;
            width: 2.9375em;
            height: .3125em;
            border-radius: .125em;
            background-color: #f27474
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: 1.0625em;
            transform: rotate(45deg)
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: 1em;
            transform: rotate(-45deg)
        }

        .swal2-icon.swal2-error.swal2-icon-show {
            -webkit-animation: swal2-animate-error-icon .5s;
            animation: swal2-animate-error-icon .5s
        }

        .swal2-icon.swal2-error.swal2-icon-show .swal2-x-mark {
            -webkit-animation: swal2-animate-error-x-mark .5s;
            animation: swal2-animate-error-x-mark .5s
        }

        .swal2-icon.swal2-warning {
            border-color: #facea8;
            color: #f8bb86
        }

        .swal2-icon.swal2-info {
            border-color: #9de0f6;
            color: #3fc3ee
        }

        .swal2-icon.swal2-question {
            border-color: #c9dae1;
            color: #87adbd
        }

        .swal2-icon.swal2-success {
            border-color: #a5dc86;
            color: #a5dc86
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 3.75em;
            height: 7.5em;
            transform: rotate(45deg);
            border-radius: 50%
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -.4375em;
            left: -2.0635em;
            transform: rotate(-45deg);
            transform-origin: 3.75em 3.75em;
            border-radius: 7.5em 0 0 7.5em
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -.6875em;
            left: 1.875em;
            transform: rotate(-45deg);
            transform-origin: 0 3.75em;
            border-radius: 0 7.5em 7.5em 0
        }

        .swal2-icon.swal2-success .swal2-success-ring {
            position: absolute;
            z-index: 2;
            top: -.25em;
            left: -.25em;
            box-sizing: content-box;
            width: 100%;
            height: 100%;
            border: .25em solid rgba(165, 220, 134, .3);
            border-radius: 50%
        }

        .swal2-icon.swal2-success .swal2-success-fix {
            position: absolute;
            z-index: 1;
            top: .5em;
            left: 1.625em;
            width: .4375em;
            height: 5.625em;
            transform: rotate(-45deg)
        }

        .swal2-icon.swal2-success [class^=swal2-success-line] {
            display: block;
            position: absolute;
            z-index: 2;
            height: .3125em;
            border-radius: .125em;
            background-color: #a5dc86
        }

        .swal2-icon.swal2-success [class^=swal2-success-line][class$=tip] {
            top: 2.875em;
            left: .8125em;
            width: 1.5625em;
            transform: rotate(45deg)
        }

        .swal2-icon.swal2-success [class^=swal2-success-line][class$=long] {
            top: 2.375em;
            right: .5em;
            width: 2.9375em;
            transform: rotate(-45deg)
        }

        .swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-tip {
            -webkit-animation: swal2-animate-success-line-tip .75s;
            animation: swal2-animate-success-line-tip .75s
        }

        .swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-long {
            -webkit-animation: swal2-animate-success-line-long .75s;
            animation: swal2-animate-success-line-long .75s
        }

        .swal2-icon.swal2-success.swal2-icon-show .swal2-success-circular-line-right {
            -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
            animation: swal2-rotate-success-circular-line 4.25s ease-in
        }

        .swal2-progress-steps {
            align-items: center;
            margin: 0 0 1.25em;
            padding: 0;
            background: inherit;
            font-weight: 600
        }

        .swal2-progress-steps li {
            display: inline-block;
            position: relative
        }

        .swal2-progress-steps .swal2-progress-step {
            z-index: 20;
            width: 2em;
            height: 2em;
            border-radius: 2em;
            background: #3085d6;
            color: #fff;
            line-height: 2em;
            text-align: center
        }

        .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
            background: #3085d6
        }

        .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step {
            background: #add8e6;
            color: #fff
        }

        .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line {
            background: #add8e6
        }

        .swal2-progress-steps .swal2-progress-step-line {
            z-index: 10;
            width: 2.5em;
            height: .4em;
            margin: 0 -1px;
            background: #3085d6
        }

        [class^=swal2] {
            -webkit-tap-highlight-color: transparent
        }

        .swal2-show {
            -webkit-animation: swal2-show .3s;
            animation: swal2-show .3s
        }

        .swal2-hide {
            -webkit-animation: swal2-hide .15s forwards;
            animation: swal2-hide .15s forwards
        }

        .swal2-noanimation {
            transition: none
        }

        .swal2-scrollbar-measure {
            position: absolute;
            top: -9999px;
            width: 50px;
            height: 50px;
            overflow: scroll
        }

        .swal2-rtl .swal2-close {
            right: auto;
            left: 0
        }

        .swal2-rtl .swal2-timer-progress-bar {
            right: 0;
            left: auto
        }

        @supports (-ms-accelerator:true) {
            .swal2-range input {
                width: 100% !important
            }

            .swal2-range output {
                display: none
            }
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            .swal2-range input {
                width: 100% !important
            }

            .swal2-range output {
                display: none
            }
        }

        @-moz-document url-prefix() {
            .swal2-close:focus {
                outline: 2px solid rgba(50, 100, 150, .4)
            }
        }

        @-webkit-keyframes swal2-toast-show {
            0% {
                transform: translateY(-.625em) rotateZ(2deg)
            }

            33% {
                transform: translateY(0) rotateZ(-2deg)
            }

            66% {
                transform: translateY(.3125em) rotateZ(2deg)
            }

            100% {
                transform: translateY(0) rotateZ(0)
            }
        }

        @keyframes swal2-toast-show {
            0% {
                transform: translateY(-.625em) rotateZ(2deg)
            }

            33% {
                transform: translateY(0) rotateZ(-2deg)
            }

            66% {
                transform: translateY(.3125em) rotateZ(2deg)
            }

            100% {
                transform: translateY(0) rotateZ(0)
            }
        }

        @-webkit-keyframes swal2-toast-hide {
            100% {
                transform: rotateZ(1deg);
                opacity: 0
            }
        }

        @keyframes swal2-toast-hide {
            100% {
                transform: rotateZ(1deg);
                opacity: 0
            }
        }

        @-webkit-keyframes swal2-toast-animate-success-line-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }

            54% {
                top: .125em;
                left: .125em;
                width: 0
            }

            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em
            }

            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }

            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }

        @keyframes swal2-toast-animate-success-line-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }

            54% {
                top: .125em;
                left: .125em;
                width: 0
            }

            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em
            }

            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }

            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }

        @-webkit-keyframes swal2-toast-animate-success-line-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }

            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }

            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }

            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }

        @keyframes swal2-toast-animate-success-line-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }

            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }

            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }

            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }

        @-webkit-keyframes swal2-show {
            0% {
                transform: scale(.7)
            }

            45% {
                transform: scale(1.05)
            }

            80% {
                transform: scale(.95)
            }

            100% {
                transform: scale(1)
            }
        }

        @keyframes swal2-show {
            0% {
                transform: scale(.7)
            }

            45% {
                transform: scale(1.05)
            }

            80% {
                transform: scale(.95)
            }

            100% {
                transform: scale(1)
            }
        }

        @-webkit-keyframes swal2-hide {
            0% {
                transform: scale(1);
                opacity: 1
            }

            100% {
                transform: scale(.5);
                opacity: 0
            }
        }

        @keyframes swal2-hide {
            0% {
                transform: scale(1);
                opacity: 1
            }

            100% {
                transform: scale(.5);
                opacity: 0
            }
        }

        @-webkit-keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }

            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }

            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em
            }

            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }

            100% {
                top: 2.8125em;
                left: .8125em;
                width: 1.5625em
            }
        }

        @keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }

            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }

            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em
            }

            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }

            100% {
                top: 2.8125em;
                left: .8125em;
                width: 1.5625em
            }
        }

        @-webkit-keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }

            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }

        @keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }

            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }

        @-webkit-keyframes swal2-rotate-success-circular-line {
            0% {
                transform: rotate(-45deg)
            }

            5% {
                transform: rotate(-45deg)
            }

            12% {
                transform: rotate(-405deg)
            }

            100% {
                transform: rotate(-405deg)
            }
        }

        @keyframes swal2-rotate-success-circular-line {
            0% {
                transform: rotate(-45deg)
            }

            5% {
                transform: rotate(-45deg)
            }

            12% {
                transform: rotate(-405deg)
            }

            100% {
                transform: rotate(-405deg)
            }
        }

        @-webkit-keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                transform: scale(.4);
                opacity: 0
            }

            50% {
                margin-top: 1.625em;
                transform: scale(.4);
                opacity: 0
            }

            80% {
                margin-top: -.375em;
                transform: scale(1.15)
            }

            100% {
                margin-top: 0;
                transform: scale(1);
                opacity: 1
            }
        }

        @keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                transform: scale(.4);
                opacity: 0
            }

            50% {
                margin-top: 1.625em;
                transform: scale(.4);
                opacity: 0
            }

            80% {
                margin-top: -.375em;
                transform: scale(1.15)
            }

            100% {
                margin-top: 0;
                transform: scale(1);
                opacity: 1
            }
        }

        @-webkit-keyframes swal2-animate-error-icon {
            0% {
                transform: rotateX(100deg);
                opacity: 0
            }

            100% {
                transform: rotateX(0);
                opacity: 1
            }
        }

        @keyframes swal2-animate-error-icon {
            0% {
                transform: rotateX(100deg);
                opacity: 0
            }

            100% {
                transform: rotateX(0);
                opacity: 1
            }
        }

        @-webkit-keyframes swal2-rotate-loading {
            0% {
                transform: rotate(0)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        @keyframes swal2-rotate-loading {
            0% {
                transform: rotate(0)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
            overflow: hidden
        }

        body.swal2-height-auto {
            height: auto !important
        }

        body.swal2-no-backdrop .swal2-container {
            top: auto;
            right: auto;
            bottom: auto;
            left: auto;
            max-width: calc(100% - .625em * 2);
            background-color: transparent !important
        }

        body.swal2-no-backdrop .swal2-container>.swal2-modal {
            box-shadow: 0 0 10px rgba(0, 0, 0, .4)
        }

        body.swal2-no-backdrop .swal2-container.swal2-top {
            top: 0;
            left: 50%;
            transform: translateX(-50%)
        }

        body.swal2-no-backdrop .swal2-container.swal2-top-left,
        body.swal2-no-backdrop .swal2-container.swal2-top-start {
            top: 0;
            left: 0
        }

        body.swal2-no-backdrop .swal2-container.swal2-top-end,
        body.swal2-no-backdrop .swal2-container.swal2-top-right {
            top: 0;
            right: 0
        }

        body.swal2-no-backdrop .swal2-container.swal2-center {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        body.swal2-no-backdrop .swal2-container.swal2-center-left,
        body.swal2-no-backdrop .swal2-container.swal2-center-start {
            top: 50%;
            left: 0;
            transform: translateY(-50%)
        }

        body.swal2-no-backdrop .swal2-container.swal2-center-end,
        body.swal2-no-backdrop .swal2-container.swal2-center-right {
            top: 50%;
            right: 0;
            transform: translateY(-50%)
        }

        body.swal2-no-backdrop .swal2-container.swal2-bottom {
            bottom: 0;
            left: 50%;
            transform: translateX(-50%)
        }

        body.swal2-no-backdrop .swal2-container.swal2-bottom-left,
        body.swal2-no-backdrop .swal2-container.swal2-bottom-start {
            bottom: 0;
            left: 0
        }

        body.swal2-no-backdrop .swal2-container.swal2-bottom-end,
        body.swal2-no-backdrop .swal2-container.swal2-bottom-right {
            right: 0;
            bottom: 0
        }

        @media print {
            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
                overflow-y: scroll !important
            }

            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
                display: none
            }

            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
                position: static !important
            }
        }

        body.swal2-toast-shown .swal2-container {
            background-color: transparent
        }

        body.swal2-toast-shown .swal2-container.swal2-top {
            top: 0;
            right: auto;
            bottom: auto;
            left: 50%;
            transform: translateX(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-top-end,
        body.swal2-toast-shown .swal2-container.swal2-top-right {
            top: 0;
            right: 0;
            bottom: auto;
            left: auto
        }

        body.swal2-toast-shown .swal2-container.swal2-top-left,
        body.swal2-toast-shown .swal2-container.swal2-top-start {
            top: 0;
            right: auto;
            bottom: auto;
            left: 0
        }

        body.swal2-toast-shown .swal2-container.swal2-center-left,
        body.swal2-toast-shown .swal2-container.swal2-center-start {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 0;
            transform: translateY(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-center {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-center-end,
        body.swal2-toast-shown .swal2-container.swal2-center-right {
            top: 50%;
            right: 0;
            bottom: auto;
            left: auto;
            transform: translateY(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom-left,
        body.swal2-toast-shown .swal2-container.swal2-bottom-start {
            top: auto;
            right: auto;
            bottom: 0;
            left: 0
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom {
            top: auto;
            right: auto;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom-end,
        body.swal2-toast-shown .swal2-container.swal2-bottom-right {
            top: auto;
            right: 0;
            bottom: 0;
            left: auto
        }

        body.swal2-toast-column .swal2-toast {
            flex-direction: column;
            align-items: stretch
        }

        body.swal2-toast-column .swal2-toast .swal2-actions {
            flex: 1;
            align-self: stretch;
            height: 2.2em;
            margin-top: .3125em
        }

        body.swal2-toast-column .swal2-toast .swal2-loading {
            justify-content: center
        }

        body.swal2-toast-column .swal2-toast .swal2-input {
            height: 2em;
            margin: .3125em auto;
            font-size: 1em
        }

        body.swal2-toast-column .swal2-toast .swal2-validation-message {
            font-size: 1em
        }
    </style>
    <script async="" type="text/javascript" src="https://cdn.livechatinc.com/tracking.js"></script>
</head>

<body>


    <section class="home__slider" style="overflow:visible">
        <div class="swiper-container main-slider swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"
            style="min-height:60px;">
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
        <div class="slider-marquee">
            <div class="header-merque">
                <div class="marquee-cont">
                    <div class="marquee-desc">
                        <i aria-hidden="true" class="v-icon notranslate fa fa-solid fa-bullhorn theme--dark"
                            style="font-size: 16px;"></i>
                        <marquee></marquee>
                    </div>
                    <div class="marquee-content">
                        <div class="marquee-date">
                            <div class="header-time" id="headerTime">Mon, January 1, 4:10:02 AM</div>
                        </div>
                    </div>
                    <div id="header-currency" class="header-flag mr-2">
                        <span>Rupiah</span>
                    </div>
                    <div id="header-lang" class="header-flag">
                        <img src="https://images.linkcdn.cloud/global/default/icon/lang/indonesia.png" alt="id">
                        <i class="fas fa-caret-down"></i>

                        <div id="lang-dropdown" class="flag-dropdown" style="display: none;">
                            <a href="javascript:;" data-locale="en" name="locale-switch">
                                <div class="flag-item">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/english.png"
                                        alt="en">
                                    <span>English</span>
                                </div>
                            </a>
                            <a href="javascript:;" data-locale="id" name="locale-switch">
                                <div class="flag-item">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/indonesia.png"
                                        alt="id">
                                    <span>Indonesia</span>
                                </div>
                            </a>
                            <a href="javascript:;" data-locale="th" name="locale-switch">
                                <div class="flag-item">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/thai.png"
                                        alt="th">
                                    <span>Thailand</span>
                                </div>
                            </a>
                            <a href="javascript:;" data-locale="vn" name="locale-switch">
                                <div class="flag-item">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/vietnam.png"
                                        alt="vn">
                                    <span>Viet</span>
                                </div>
                            </a>
                            <a href="javascript:;" data-locale="kh" name="locale-switch">
                                <div class="flag-item">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/cambodia.png"
                                        alt="kh">
                                    <span>Khmer</span>
                                </div>
                            </a>
                            <a href="javascript:;" data-locale="cn" name="locale-switch">
                                <div class="flag-item">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/chinese.png"
                                        alt="cn">
                                    <span>Chinese</span>
                                </div>
                            </a>
                            <a href="javascript:;" data-locale="tl" name="locale-switch">
                                <div class="flag-item">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/philippines.png"
                                        alt="tl">
                                    <span>Tagalog</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add Menu Modal -->
    @include('mahacuan.modal_menu')
    <!-- /Add Menu Modal -->

    <div class="header-nav">
        <div id="pageLoadingBar" class="progress-bar progress-bar-success" role="progressbar"
            style="height: 4px; width: 1%; position: absolute; z-index: 999; display: none;"></div>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <div class="nav-item">
                            <a class="nav-link" href="javascript:;" onclick="routeNav('/')">
                                <img src="https://mahacuan.live/themes/1/img/navigation/home.svg" width="80">
                                <span class="nav-link-name">
                                    Home
                                </span>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a href="javascript:;" class="nav-link" onclick="routeNav('/slot')"
                                style="cursor: pointer;">
                                <img src="https://mahacuan.live/themes/1/img/navigation/slot.svg" width="80"
                                    alt="slot">
                                <span class="nav-link-name">
                                    Slot
                                </span>
                            </a>
                            <div class="nav-item__game">
                                <div class="container-fluid text-center justify-content-center">
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/fastspin')" href="javascript:;">
                                            <img title="FASTSPIN" alt="FASTSPIN"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/fsp.webp">
                                            <div class="game-name">FASTSPIN</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/pragmaticplay')" href="javascript:;">
                                            <img title="Pragmatic Play" alt="Pragmatic Play"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/pra.webp">
                                            <div class="game-name">Pragmatic Play</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/spadegaming')" href="javascript:;">
                                            <img title="Spade Gaming" alt="Spade Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/spd.webp">
                                            <div class="game-name">Spade Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=NLS&amp;gameCode=NLS&amp;isTrial=0"
                                            target="window-play">
                                            <img title="N2Live Slot" alt="N2Live Slot"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/nli.webp">
                                            <div class="game-name">N2Live Slot</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/pgsoft')" href="javascript:;">
                                            <img title="PG Soft" alt="PG Soft"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/pgs.webp">
                                            <div class="game-name">PG Soft</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/fachai')" href="javascript:;">
                                            <img title="Fa Chai" alt="Fa Chai"
                                                src=" https://images.linkcdn.cloud/global/game-skin1/navbar/slot/fac.webp ">
                                            <div class="game-name">Fa Chai</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/jili')" href="javascript:;">
                                            <img title="JILI" alt="JILI"
                                                src=" https://images.linkcdn.cloud/global/game-skin1/navbar/slot/jli.webp ">
                                            <div class="game-name">JILI</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/redtiger')" href="javascript:;">
                                            <img title="RED TIGER" alt="RED TIGER"
                                                src=" https://images.linkcdn.cloud/global/game-skin1/navbar/slot/rtr.webp ">
                                            <div class="game-name">RED TIGER</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/afbgaming')" href="javascript:;">
                                            <img title="Afb Gaming" alt="Afb Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/afg.webp">
                                            <div class="game-name">Afb Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item">
                                        <a href="javascript:;">
                                            <img title="AIS GAMING" alt="AIS GAMING"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/aisg.webp">
                                            <div class="game-name">AIS GAMING</div>
                                            <img title="AIS GAMING" alt="AIS GAMING" class="game-maintenance"
                                                src="https://images.linkcdn.cloud/global/nav-addons/maintenance_logo.png">
                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/hcgaming')" href="javascript:;">
                                            <img title="HC Game" alt="HC Game"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/hcg.webp">
                                            <div class="game-name">HC Game</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/advantplay')" href="javascript:;">
                                            <img title="Advantplay" alt="Advantplay"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/adv.webp">
                                            <div class="game-name">Advantplay</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/jdb')" href="javascript:;">
                                            <img title="JDB" alt="JDB"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/jdb.webp">
                                            <div class="game-name">JDB</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/nolimitcity')" href="javascript:;">
                                            <img title="NoLimit City" alt="NoLimit City"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/nlc.webp">
                                            <div class="game-name">NoLimit City</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/playstar')" href="javascript:;">
                                            <img title="Playstar" alt="Playstar"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/pls.webp">
                                            <div class="game-name">Playstar</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/joker')" href="javascript:;">
                                            <img title="Joker Gaming" alt="Joker Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/jok.webp">
                                            <div class="game-name">Joker Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/habanero')" href="javascript:;">
                                            <img title="Habanero" alt="Habanero"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/hbn.webp">
                                            <div class="game-name">Habanero</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/cq9')" href="javascript:;">
                                            <img title="CQ9 Gaming" alt="CQ9 Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/cq9.webp">
                                            <div class="game-name">CQ9 Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/virtualtech')" href="javascript:;">
                                            <img title="Virtual Tech" alt="Virtual Tech"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/vrt.webp">
                                            <div class="game-name">Virtual Tech</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/ameba')" href="javascript:;">
                                            <img title="Ameba" alt="Ameba"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/amb.webp">
                                            <div class="game-name">Ameba</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/ttg')" href="javascript:;">
                                            <img title="Top Trend Gaming" alt="Top Trend Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/ttg.webp">
                                            <div class="game-name">Top Trend Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/microgaming')" href="javascript:;">
                                            <img title="Microgaming" alt="Microgaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/mic.webp">
                                            <div class="game-name">Microgaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item">
                                        <a href="javascript:;">
                                            <img title="Playtech Slot" alt="Playtech Slot"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/pla.webp">
                                            <div class="game-name">Playtech Slot</div>
                                            <img title="Playtech Slot" alt="Playtech Slot" class="game-maintenance"
                                                src="https://images.linkcdn.cloud/global/nav-addons/maintenance_logo.png">
                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/playngo')" href="javascript:;">
                                            <img title="Play N Go" alt="Play N Go"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/png.webp">
                                            <div class="game-name">Play N Go</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/hydako')" href="javascript:;">
                                            <img title="Hydako" alt="Hydako"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/hyd.webp">
                                            <div class="game-name">Hydako</div>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-item">
                            <a href="javascript:;" class="nav-link" onclick="routeNav('/livegames')"
                                style="cursor: pointer;">
                                <img src="https://images.linkcdn.cloud/global/nav-addons/hot_category.png"
                                    width="30" height="12" class="hot-tag">
                                <img src="https://mahacuan.live/themes/1/img/navigation/livegames.svg" width="80"
                                    alt="livegames">
                                <span class="nav-link-name">
                                    Live Game
                                </span>
                            </a>
                            <div class="nav-item__game">
                                <div class="container-fluid text-center justify-content-center">
                                    <div class="game-item game-item-new">
                                        <a onclick="routeNav('/livegames/livegame')" href="javascript:;">
                                            <img class="logolivegame" alt="WebsiteLogo"
                                                src="https://images.linkcdn.cloud/V2/779/logo/logo-1933674734.png">
                                            <img title="LIVE GAME" alt="LIVE GAME"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/other/lvg.webp">
                                            <div class="game-name">MAHACUAN LIVE</div>

                                            <img title="LIVE GAME" alt="LIVE GAME" class="game-new"
                                                src="https://images.linkcdn.cloud/global/nav-addons/new_icon.webp">
                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=WS1&amp;gameCode=WS1&amp;isTrial=0"
                                            target="window-play">
                                            <img title="WS168" alt="WS168"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/other/ws1.webp">
                                            <div class="game-name">WS168</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=MKI&amp;gameCode=MKI&amp;isTrial=0"
                                            target="window-play">
                                            <img title="MIKI Gaming" alt="MIKI Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/other/mki.webp">
                                            <div class="game-name">MIKI Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=SV3&amp;gameCode=SV3&amp;isTrial=0"
                                            target="window-play">
                                            <img title="SV388 Cockfight" alt="SV388 Cockfight"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/other/sv3.webp">
                                            <div class="game-name">SV388 Cockfight</div>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-item">
                            <a href="javascript:;" class="nav-link" onclick="routeNav('/casino')"
                                style="cursor: pointer;">
                                <img src="https://mahacuan.live/themes/1/img/navigation/casino.svg" width="80"
                                    alt="casino">
                                <span class="nav-link-name">
                                    Casino
                                </span>
                            </a>
                            <div class="nav-item__game">
                                <div class="container-fluid text-center justify-content-center">
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=AFC&amp;gameCode=AFC&amp;isTrial=0"
                                            target="window-play">
                                            <img title="AFB CASINO" alt="AFB CASINO"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/afc.webp">
                                            <div class="game-name">AFB CASINO</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=PLC&amp;gameCode=PLC&amp;isTrial=0"
                                            target="window-play">
                                            <img title="Pragmatic Play LC" alt="Pragmatic Play LC"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/plc.webp">
                                            <div class="game-name">Pragmatic Play LC</div>

                                        </a>
                                    </div>
                                    <div class="game-item game-item-new">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=WEC&amp;gameCode=WEC&amp;isTrial=0"
                                            target="window-play">
                                            <img title="WE CASINO" alt="WE CASINO"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/wec.webp">
                                            <div class="game-name">WE CASINO</div>

                                            <img title="WE CASINO" alt="WE CASINO" class="game-new"
                                                src="https://images.linkcdn.cloud/global/nav-addons/new_icon.webp">
                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=GD8&amp;gameCode=GD8&amp;isTrial=0"
                                            target="window-play">
                                            <img title="GD88" alt="GD88"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/gd8.webp">
                                            <div class="game-name">GD88</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=WMC&amp;gameCode=WMC&amp;isTrial=0"
                                            target="window-play">
                                            <img title="WM Casino" alt="WM Casino"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/wmc.webp">
                                            <div class="game-name">WM Casino</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=ORI&amp;gameCode=ORI&amp;isTrial=0"
                                            target="window-play">
                                            <img title="OG Casino" alt="OG Casino"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/ogs.webp">
                                            <div class="game-name">OG Casino</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=EVO&amp;gameCode=EVO&amp;isTrial=0"
                                            target="window-play">
                                            <img title="Evolution" alt="Evolution"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/evo.webp">
                                            <div class="game-name">Evolution</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=ALB&amp;gameCode=ALB&amp;isTrial=0"
                                            target="window-play">
                                            <img title="ALLBET" alt="ALLBET"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/alb.webp">
                                            <div class="game-name">ALLBET</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=DRG&amp;gameCode=DRG&amp;isTrial=0"
                                            target="window-play">
                                            <img title="Dream Gaming" alt="Dream Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/drg.webp">
                                            <div class="game-name">Dream Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=AGC&amp;gameCode=AGC&amp;isTrial=0"
                                            target="window-play">
                                            <img title="Asia Gaming" alt="Asia Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/agc.webp">
                                            <div class="game-name">Asia Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=SEG&amp;gameCode=SEG&amp;isTrial=0"
                                            target="window-play">
                                            <img title="Sexy Gaming" alt="Sexy Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/seg.webp">
                                            <div class="game-name">Sexy Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=LG8&amp;gameCode=LG8&amp;isTrial=0"
                                            target="window-play">
                                            <img title="LG88" alt="LG88"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/lg8.webp">
                                            <div class="game-name">LG88</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=NLI&amp;gameCode=NLI&amp;isTrial=0"
                                            target="window-play">
                                            <img title="N2Live" alt="N2Live"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/nli.webp">
                                            <div class="game-name">N2Live</div>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-item">
                            <a href="javascript:;" class="nav-link" onclick="routeNav('/sportsbook')"
                                style="cursor: pointer;">
                                <img src="https://mahacuan.live/themes/1/img/navigation/sport.svg" width="80"
                                    alt="sport">
                                <span class="nav-link-name">
                                    Sportsbook
                                </span>
                            </a>
                            <div class="nav-item__game">
                                <div class="container-fluid text-center justify-content-center">
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=AFB&amp;gameCode=AFB&amp;isTrial=0"
                                            target="window-play">
                                            <img title="AFB88" alt="AFB88"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/sportbook/afb88.webp">
                                            <div class="game-name">AFB88</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=IAE&amp;gameCode=IAE&amp;isTrial=0"
                                            target="window-play">
                                            <img title="IA E-SPORT" alt="IA E-SPORT"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/sportbook/iae.webp">
                                            <div class="game-name">IA E-SPORT</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=SBO&amp;gameCode=SBO&amp;isTrial=0"
                                            target="window-play">
                                            <img title="SBO SPORT" alt="SBO SPORT"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/sportbook/sbobet.webp">
                                            <div class="game-name">SBO SPORT</div>

                                        </a>
                                    </div>
                                    <div class="game-item">
                                        <a href="javascript:;">
                                            <img title="CMD368" alt="CMD368"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/sportbook/cmd368.webp">
                                            <div class="game-name">CMD368</div>
                                            <img title="CMD368" alt="CMD368" class="game-maintenance"
                                                src="https://images.linkcdn.cloud/global/nav-addons/maintenance_logo.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-item">
                            <a href="javascript:;" class="nav-link" onclick="routeNav('/lottery')"
                                style="cursor: pointer;">
                                <img src="https://mahacuan.live/themes/1/img/navigation/lottery.svg" width="80"
                                    alt="lottery">
                                <span class="nav-link-name">
                                    Lottery
                                </span>
                            </a>
                            <div class="nav-item__game">
                                <div class="container-fluid text-center justify-content-center">
                                    <div class="game-item ">
                                        <a onclick="routeNav('/lottery/4d')" href="javascript:;">
                                            <img title="4D" alt="4D"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/lottery/tog.webp">
                                            <div class="game-name">4D</div>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-item">
                            <a href="javascript:;" class="nav-link" onclick="routeNav('/arcade')"
                                style="cursor: pointer;">
                                <img src="https://mahacuan.live/themes/1/img/navigation/arcade.svg" width="80"
                                    alt="arcade">
                                <span class="nav-link-name">
                                    Arcade
                                </span>
                            </a>
                            <div class="nav-item__game">
                                <div class="container-fluid text-center justify-content-center">
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=PLC&amp;gameCode=1302&amp;isTrial=0"
                                            target="window-play">
                                            <img title="Spaceman" alt="Spaceman"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/other/spa.webp">
                                            <div class="game-name">Spaceman</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/arcade/joker')" href="javascript:;">
                                            <img title="Joker Gaming" alt="Joker Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/fishing/jok.webp">
                                            <div class="game-name">Joker Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/arcade/spade')" href="javascript:;">
                                            <img title="Spade Gaming" alt="Spade Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/fishing/spd.webp">
                                            <div class="game-name">Spade Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/arcade/playstar')" href="javascript:;">
                                            <img title="Playstar" alt="Playstar"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/fishing/pls.webp">
                                            <div class="game-name">Playstar</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/arcade/cq9')" href="javascript:;">
                                            <img title="CQ9" alt="CQ9"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/fishing/cq9.webp">
                                            <div class="game-name">CQ9</div>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link" href="javascript:;" onclick="routeNav('/news')">
                                <img src="https://mahacuan.live/themes/1/img/navigation/news.svg" width="80">
                                <span class="nav-link-name">
                                    Berita
                                </span>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link" href="javascript:;" onclick="routeNav('/promotion')">
                                <img src="https://mahacuan.live/themes/1/img/navigation/promotion.svg" width="80">
                                <span class="nav-link-name">
                                    Promosi
                                </span>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link" href="https://mahacuan.live/event">
                                <img src="https://mahacuan.live/themes/1/img/navigation/event.svg" width="80">
                                <span class="nav-link-name">
                                    Event
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="header-mobile">
        <div class="header-mobile__top">
            <div class="mobile-logo">
                <a href="https://mahacuan.live">
                    <img src="https://images.linkcdn.cloud/V2/779/logo/logo-1933674734.png" alt="WebsiteLogo"
                        width="125" height="27">
                </a>
            </div>
            <div class="mobile-button">
                <div class="badge">
                    <a href="#" class="text-white" name="refreshWallet"><span><i
                                class="fa fa-sync"></i></span></a>
                </div>
                <div class="mobile-button--transaksi" href="#" data-toggle="modal"
                    data-target="#accountBalance">
                    <i class="fas fa-coins m-auto"></i> IDR
                    <a class="wallet-amount" id="wallet-amount"><span name="mainBalance">0.00</span></a>
                </div>
                <div data-target="slide-out" class="mobile-button--menu sidenav-toggle">
                    <i class="fas fa-bars m-auto"></i>
                </div>
            </div>
        </div>
        <div class="header-mobile__marquee">
            <i class="fas fa-bullhorn"></i>
            <marquee class="marquee"></marquee>
        </div>
        <div id="mobilePageLoadingBar" class="progress-bar progress-bar-success" role="progressbar"
            style="height:4px;width:1%;position:absolute;z-index:999;display:none;"></div>
    </div>
    <div id="overlay"></div>
    <div class="sidenav">

        <div class="sidenav__header">
            <div class="header-top">
                <div class="header-time" id="headerTime"></div>
                <div class="flags show-popup-language" data-toggle="modal" data-target="#languageModal">
                    <span>Indonesia</span>
                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/indonesia.png" alt="id">
                </div>
            </div>
            <div class="header-user">
                <span>Selamat Datang</span>
                <span class="account-username">
                    <img src="https://mahacuan.live/themes/1/img/user-status/New Player.svg" alt="">
                    <a href="https://mahacuan.live/profile">okesiap1</a>
                </span>
            </div>
        </div>


        <div class="sidenav__menu">
            <div class="menu-list">
                <a class="show-game-category" href="#" data-toggle="modal" data-target="#categoryProvModal">
                    <div class="list-item">
                        <img src="https://mahacuan.live/themes/1/img/navigation/game.svg" width="60"
                            height="60">
                        <div class="menu-title">Permainan</div>
                    </div>
                </a>
                <a href="https://mahacuan.live/memo">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/memo.svg" width="60"
                            height="60">
                        <div class="menu-title">Memo<span>[0]</span></div>
                    </div>
                </a>
                <a href="https://mahacuan.live/profile">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/login.svg" width="60"
                            height="60">
                        <div class="menu-title">Akun Saya</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="sidenav__header">
            <div class="header-user">
                <span>Transaksi</span>
            </div>
        </div>
        <div class="sidenav__menu">
            <div class="menu-list">
                <a href="https://mahacuan.live/transaction#deposit">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/deposit1.svg" width="60"
                            height="60">
                        <div class="menu-title">Deposit</div>
                    </div>
                </a>
                <a href="https://mahacuan.live/transaction#claim">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/claim-bonus.svg" width="60"
                            height="60">
                        <div class="menu-title">Klaim</div>
                    </div>
                </a>
                <a href="https://mahacuan.live/transaction#withdraw">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/withdraw.svg" width="60"
                            height="60">
                        <div class="menu-title">Tarik Dana</div>
                    </div>
                </a>
                <a name="bonusSidebar" id="promoSidebar" href="https://mahacuan.live/bonus#promo">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/promotion.svg" width="60"
                            height="60">
                        <div class="menu-title">Promo</div>
                    </div>
                </a>
                <a name="bonusSidebar" id="referralSidebar" href="https://mahacuan.live/bonus#referral">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/referal.svg" width="60"
                            height="60">
                        <div class="menu-title">Refferal</div>
                    </div>
                </a>
                <a name="bonusSidebar" id="rebateSidebar" href="https://mahacuan.live/bonus#rebate">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/rebate.svg" width="60"
                            height="60">
                        <div class="menu-title">Rebate</div>
                    </div>
                </a>
                <a href="#" class="voucher-button sidenav-voucher" data-toggle="modal"
                    data-target="#voucherModal">
                    <div class="list-item">
                        <img src="https://mahacuan.live/themes/1/img/navigation/voucher.svg" width="60"
                            height="60">
                        <div class="menu-title">Voucher</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="sidenav__header">
            <div class="header-user">
                <span>Konten</span>
            </div>
        </div>
        <div class="sidenav__menu">
            <div class="menu-list">
                <a href="javascript:;" onclick="routeNav('/promotion')">
                    <div class="list-item  ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/promo.svg" width="60"
                            height="60">
                        <div class="menu-title">Promosi</div>
                    </div>
                </a>
                <a href="javascript:;" onclick="routeNav('/news')">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/news.svg" width="60"
                            height="60">
                        <div class="menu-title">Berita</div>
                    </div>
                </a>
                <a href="https://mahacuan.live/help">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/help.svg" width="60"
                            height="60">
                        <div class="menu-title">Bantuan</div>
                    </div>
                </a>
                <a href="/contact">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/contactus.svg" width="60"
                            height="60">
                        <div class="menu-title">Kontak Kami</div>
                    </div>
                </a>
                <a href="https://mahacuan.live/feedback">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/feedback.svg" width="60"
                            height="60">
                        <div class="menu-title">Laporan ke Pusat</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="sidenav__menu" style="padding-top: 150px">
            <div class="menu-logout">
                <a href="https://mahacuan.live/member/logout">
                    <div class="list-item">
                        <img src="https://mahacuan.live/themes/1/img/navigation/logout.svg" width="60"
                            height="60">
                        <div class="menu-title">Keluar</div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="modal fade custom-popup" id="languageModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>

                <div class="language-header">
                    <h3>Region and Language</h3>
                    <div class="header-flag">
                        <img src="https://images.linkcdn.cloud/global/default/icon/lang/indonesia.png" alt="id">
                        <h6>Indonesia</h6>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="language-list">
                        <a href="javascript:;" data-locale="en" name="locale-switch">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/english.png"
                                        alt="en">
                                </div>
                                <div class="item-content">
                                    <h6><small>en</small></h6>
                                    <h5>English</h5>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:;" data-locale="id" name="locale-switch">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/indonesia.png"
                                        alt="id">
                                </div>
                                <div class="item-content">
                                    <h6><small>id</small></h6>
                                    <h5>Indonesia</h5>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:;" data-locale="th" name="locale-switch">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/thai.png"
                                        alt="th">
                                </div>
                                <div class="item-content">
                                    <h6><small>th</small></h6>
                                    <h5>Thailand</h5>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:;" data-locale="vn" name="locale-switch">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/vietnam.png"
                                        alt="vn">
                                </div>
                                <div class="item-content">
                                    <h6><small>vn</small></h6>
                                    <h5>Viet</h5>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:;" data-locale="kh" name="locale-switch">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/cambodia.png"
                                        alt="kh">
                                </div>
                                <div class="item-content">
                                    <h6><small>kh</small></h6>
                                    <h5>Khmer</h5>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:;" data-locale="cn" name="locale-switch">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/chinese.png"
                                        alt="cn">
                                </div>
                                <div class="item-content">
                                    <h6><small>cn</small></h6>
                                    <h5>Chinese</h5>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:;" data-locale="tl" name="locale-switch">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/philippines.png"
                                        alt="tl">
                                </div>
                                <div class="item-content">
                                    <h6><small>tl</small></h6>
                                    <h5>Tagalog</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://mahacuan.live/themes/1/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        let loginEl = document.getElementById('login-widget');

        window.addEventListener('scroll', (event) => {
            var currentScroll = document.documentElement.scrollTop;

            // let loginEl = document.getElementById('login-widget');

            if (currentScroll >= 150) {
                loginEl.classList.add('minimized');
            } else if (currentScroll <= 100) {
                $('#login-widget').removeClass('minimized');
                $(".icon-minimize").click()
            }
        });

        var inputUsername = document.getElementById('username')

        $('#usernameInput').on('focus', function() {
            $('#login-widget').removeClass('minimized')
        })

        $('#passwordInput').on('focus', function() {
            $('#login-widget').removeClass('minimized')
        })

        $('.widget-form__member').hover(function() {
            $('#login-widget').removeClass('minimized')
        })

        $('.widget-form__logo').hover(function() {
            $('#login-widget').removeClass('minimized')
        })
    </script>


    <!-- Account Balance -->
    <div class="modal custom-popup fade" id="accountBalance" tabindex="-1" aria-labelledby="accountBalanceLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
                <div class="modal-body">
                    <div class="popup-account-balance">
                        <div class="balance-header">
                            <h6>DOMPET</h6>
                            <div class="acc-balance"><span name="mainBalance">0.00</span></div>
                        </div>
                        <div class="balance-category d-flex align-items-center">
                            <div class="category-name m-0">DOMPET UTAMA</div>
                            <div class="acc-balance ml-auto"><span id="balance-common-total">0.00</span></div>
                        </div>
                        <div class="balance-category d-flex align-items-center">
                            <div class="category-name m-0">DOMPET POKER</div>
                            <div class="acc-balance ml-auto"><span id="balance-poker-total">0.00</span></div>
                        </div>
                        <div class="balance-category">
                            <div class="category-name">SLOT</div>
                            <div class="provider-list">
                                <div class="prov-item">
                                    <div class="prov-title">FASTSPIN</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInFSP" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutFSP" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedFSP" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-FSP">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Pragmatic Play</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInPRA" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutPRA" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedPRA" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-PRA">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Spade Gaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInSPD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutSPD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedSPD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-SPD">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">N2Live Slot</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInNLS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutNLS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedNLS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-NLS">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">PG Soft</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInPGS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutPGS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedPGS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-PGS">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Fa Chai</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInFAC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutFAC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedFAC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-FAC">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">JILI</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInJLI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutJLI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedJLI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-JLI">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">RED TIGER</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInRED" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutRED" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedRED" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-RED">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Afb Gaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInAFG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutAFG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedAFG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-AFG">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">AIS GAMING</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInAIS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutAIS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedAIS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-AIS">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">HC Game</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInHCG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutHCG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedHCG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-HCG">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Advantplay</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInADV" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutADV" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedADV" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-ADV">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">JDB</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInJDB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutJDB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedJDB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-JDB">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">NoLimit City</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInNLC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutNLC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedNLC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-NLC">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Playstar</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInPLS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutPLS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedPLS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-PLS">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Joker Gaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInJOK" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutJOK" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedJOK" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-JOK">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Habanero</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInHBN" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutHBN" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedHBN" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-HBN">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">CQ9 Gaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInCQ9" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutCQ9" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedCQ9" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-CQ9">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Virtual Tech</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInVRT" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutVRT" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedVRT" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-VRT">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Ameba</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInAMB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutAMB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedAMB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-AMB">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Top Trend Gaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInTTG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutTTG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedTTG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-TTG">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Microgaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInMIC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutMIC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedMIC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-MIC">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Playtech Slot</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInPLA" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutPLA" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedPLA" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-PLA">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Play N Go</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInPNG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutPNG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedPNG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-PNG">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Hydako</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInHYD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutHYD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedHYD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-HYD">0.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="balance-category">
                            <div class="category-name">LIVEGAMES</div>
                            <div class="provider-list">
                                <div class="prov-item">
                                    <div class="prov-title">LIVE GAME</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInLVG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutLVG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedLVG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-LVG">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">WS168</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInWS1" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutWS1" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedWS1" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-WS1">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">MIKI Gaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInMKI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutMKI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedMKI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-MKI">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">SV388 Cockfight</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInSV3" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutSV3" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedSV3" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-SV3">0.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="balance-category">
                            <div class="category-name">CASINO</div>
                            <div class="provider-list">
                                <div class="prov-item">
                                    <div class="prov-title">AFB CASINO</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInAFC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutAFC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedAFC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-AFC">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Pragmatic Play LC</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInPLC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutPLC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedPLC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-PLC">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">WE CASINO</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInWEC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutWEC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedWEC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-WEC">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">GD88</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInGD8" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutGD8" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedGD8" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-GD8">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">WM Casino</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInWMC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutWMC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedWMC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-WMC">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">OG Casino</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInORI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutORI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedORI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-ORI">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Evolution</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInEVO" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutEVO" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedEVO" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-EVO">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">ALLBET</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInALB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutALB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedALB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-ALB">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Dream Gaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInDRG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutDRG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedDRG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-DRG">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Asia Gaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInAGC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutAGC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedAGC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-AGC">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Sexy Gaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInSEG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutSEG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedSEG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-SEG">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">LG88</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInLG8" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutLG8" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedLG8" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-LG8">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">N2Live</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInNLI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutNLI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedNLI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-NLI">0.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="balance-category">
                            <div class="category-name">SPORT</div>
                            <div class="provider-list">
                                <div class="prov-item">
                                    <div class="prov-title">AFB88</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInAFB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutAFB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedAFB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-AFB">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">IA E-SPORT</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInIAE" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutIAE" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedIAE" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-IAE">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">SBO SPORT</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInSBO" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutSBO" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedSBO" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-SBO">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">CMD368</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInCMD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutCMD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedCMD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-CMD">0.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="balance-category">
                            <div class="category-name">LOTTERY</div>
                            <div class="provider-list">
                                <div class="prov-item">
                                    <div class="prov-title">4D</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInTOG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutTOG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedTOG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-TOG">0.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="balance-category">
                            <div class="category-name">ARCADE</div>
                            <div class="provider-list">
                                <div class="prov-item">
                                    <div class="prov-title">Spaceman</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInPLC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutPLC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedPLC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-PLC">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Joker Gaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInJOK" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutJOK" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedJOK" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-JOK">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Spade Gaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInSPD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutSPD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedSPD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-SPD">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Playstar</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInPLS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutPLS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedPLS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-PLS">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">CQ9</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInCQ9" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutCQ9" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedCQ9" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-CQ9">0.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="balance-button">
                    <a href="https://mahacuan.live/transaction#deposit" id="depositModal" type="button"
                        class="btn-custom">Tambah Dana</a>
                    <a href="https://mahacuan.live/transaction#withdraw" id="withdrawModal" type="button"
                        class="btn-custom">Tarik Dana</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Redeem Voucher -->
    <div class="modal custom-popup fade" id="voucherModal" tabindex="-1" aria-labelledby="voucherLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
                <div class="modal-body">
                    <div class="popup-voucher">
                        <div class="voucher-header">
                            <h4>Tukar Voucher</h4>
                        </div>
                        <div class="voucher-label">Kode Voucher</div>
                        <div class="voucher-details">
                            <div class="voucher-details-input">
                                <input class="form-control form-control-sm" id="voucher_code"
                                    placeholder="Masukkan kode voucher anda" type="text">
                            </div>
                            <div class="voucher-details-scan">
                                <button class="btn-custom-sm"><i class="fas fa-qrcode"></i></button>
                                <input type="file" id="qr-input-file" accept="image/*">
                            </div>
                        </div>
                        <div class="text-center my-3" id="error-message"></div>
                        <div id="reader"></div>
                        <div class="voucher-button">
                            <button class="btn-custom-sm" id="submitVoucher">Kirim/Tukarkan Kode</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main id="main-route">
        <div class="main-content transaksi">
            <div class="container">
                <ul class="component-tabs nav nav-tabs" id="transactionTabs">
                    <li class="nav-item">
                        <a class="button-pills nav-link" id="nav-deposit-tab" data-toggle="tab"
                            href="#nav-deposit" role="tab" aria-controls="nav-deposit" aria-expanded="false"
                            aria-selected="false">
                            <img src="https://mahacuan.live/themes/1/img/navigation/deposit1.svg" width="40"
                                height="40">
                            <span>Tambah Dana</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="button-pills nav-link active" id="nav-withdraw-tab" data-toggle="tab"
                            href="#nav-withdraw" role="tab" aria-controls="nav-withdraw"
                            aria-expanded="false" aria-selected="true">
                            <img src="https://mahacuan.live/themes/1/img/navigation/cashback.svg" width="40"
                                height="40">
                            <i class="fas fa-coins"></i>
                            <span>Tarik Dana</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="button-pills nav-link" id="nav-claim-tab" data-toggle="tab" href="#nav-claim"
                            role="tab" aria-controls="nav-claim" aria-expanded="false"
                            aria-selected="false">
                            <img src="https://mahacuan.live/themes/1/img/navigation/claim-bonus.svg" width="40"
                                height="40">
                            <span>Klaim Promo</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="button-pills nav-link" id="nav-cashback-tab" data-toggle="tab"
                            href="#nav-cashback" role="tab" aria-controls="nav-cashback"
                            aria-expanded="false" aria-selected="false">
                            <img src="https://mahacuan.live/themes/1/img/navigation/cashback.svg" width="40"
                                height="40">
                            <span>Cashback</span>
                        </a>
                    </li>
                </ul>
                <div class="component-tab-content tab-content" id="pills-tabContent">
                    <div class="tab-pane fade" id="nav-deposit" role="tabpanel"
                        aria-labelledby="nav-deposit-tab">
                        <!-- Add form_deposit -->
                        @include('mahacuan.form_deposit')
                        <!-- /Add form_deposit -->
                    </div>
                    <div class="tab-pane fade active show" id="nav-withdraw" role="tabpanel"
                        aria-labelledby="nav-withdraw-tab">
                        <!-- Add form_penarikan -->
                        @include('mahacuan.form_penarikan')
                        <!-- /Add form_penarikan -->
                    </div>
                    <div class="tab-pane fade" id="nav-claim" role="tabpanel" aria-labelledby="nav-claim-tab">
                        <div class="transaksi-bonus" style="display: block;">
                            <div class="claim-bonus">
                                <div id="promoPage">
                                    <div class="claim-title">
                                        <h4>Klaim Promo</h4>

                                    </div>
                                    <div class="bonus-list" id="listBonus">
                                        <div class="row">
                                            <div class="col-lg-4 mb-3">
                                                <div class="bonus-item">
                                                    <div class="prog-title">BONUS NEW MEMBER SLOT 200%</div>
                                                    <div class="prog-game">
                                                        <div
                                                            class="swiper-container prog-game-swiper swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-multirow">
                                                            <div class="swiper-wrapper"
                                                                id="swiper-wrapper-8bb190bc2faeaae3"
                                                                aria-live="polite"
                                                                style="width: 1252px; transform: translate3d(0px, 0px, 0px);">
                                                                <div class="swiper-slide swiper-slide-active"
                                                                    role="group" aria-label="1 / 23"
                                                                    style="width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src=" https://images.linkcdn.cloud/global/logo-footer/slot/jli_footer.webp ">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide swiper-slide-next"
                                                                    role="group" aria-label="2 / 23"
                                                                    style="width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src="https://images.linkcdn.cloud/global/logo-footer/slot/afg_footer.png">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" role="group"
                                                                    aria-label="3 / 23"
                                                                    style="width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src=" https://images.linkcdn.cloud/global/logo-footer/slot/rtr_footer.webp ">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" role="group"
                                                                    aria-label="4 / 23"
                                                                    style="width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src="https://images.linkcdn.cloud/global/logo-footer/slot/nlc_footer.png">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" role="group"
                                                                    aria-label="5 / 23"
                                                                    style="width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src=" https://images.linkcdn.cloud/global/logo-footer/slot/fac_footer.webp ">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" role="group"
                                                                    aria-label="6 / 23"
                                                                    style="width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src="https://images.linkcdn.cloud/global/logo-footer/slot/fastspin_footer.png">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" role="group"
                                                                    aria-label="7 / 23"
                                                                    style="width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src="https://images.linkcdn.cloud/global/logo-footer/casino/jdb_footer.png">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" role="group"
                                                                    aria-label="8 / 23"
                                                                    style="width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src="https://images.linkcdn.cloud/global/logo-footer/slot/pgs_footer.png">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" role="group"
                                                                    aria-label="9 / 23"
                                                                    style="width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src="https://images.linkcdn.cloud/global/logo-footer/slot/hyd_footer.png">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" role="group"
                                                                    aria-label="10 / 23"
                                                                    style="width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src="https://images.linkcdn.cloud/global/logo-footer/slot/amb_footer.png">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" role="group"
                                                                    aria-label="11 / 23"
                                                                    style="width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src="https://images.linkcdn.cloud/global/logo-footer/slot/cq9_footer.png">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" role="group"
                                                                    aria-label="12 / 23"
                                                                    style="width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src="https://images.linkcdn.cloud/global/logo-footer/slot/vrt_footer.png">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" role="group"
                                                                    aria-label="13 / 23"
                                                                    style="margin-top: 10px; width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src="https://images.linkcdn.cloud/global/logo-footer/slot/pls_footer.png">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" role="group"
                                                                    aria-label="14 / 23"
                                                                    style="margin-top: 10px; width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src="https://images.linkcdn.cloud/global/logo-footer/slot/png_footer.png">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" role="group"
                                                                    aria-label="15 / 23"
                                                                    style="margin-top: 10px; width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src="https://images.linkcdn.cloud/global/logo-footer/slot/micro_logo.png">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" role="group"
                                                                    aria-label="16 / 23"
                                                                    style="margin-top: 10px; width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src="https://images.linkcdn.cloud/global/logo-footer/casino/plc_footer.png">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" role="group"
                                                                    aria-label="17 / 23"
                                                                    style="margin-top: 10px; width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src="https://images.linkcdn.cloud/global/logo-footer/slot/hcg_footer.png">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" role="group"
                                                                    aria-label="18 / 23"
                                                                    style="margin-top: 10px; width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src="https://images.linkcdn.cloud/global/logo-footer/slot/adv_footer.png">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" role="group"
                                                                    aria-label="19 / 23"
                                                                    style="margin-top: 10px; width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src="https://images.linkcdn.cloud/global/logo-footer/casino/nli_footer.png">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" role="group"
                                                                    aria-label="20 / 23"
                                                                    style="margin-top: 10px; width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src="https://images.linkcdn.cloud/global/logo-footer/slot/spd_footer.png">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" role="group"
                                                                    aria-label="21 / 23"
                                                                    style="margin-top: 10px; width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src="https://images.linkcdn.cloud/global/logo-footer/slot/hbn_footer.png">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" role="group"
                                                                    aria-label="22 / 23"
                                                                    style="margin-top: 10px; width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src="https://images.linkcdn.cloud/global/logo-footer/slot/ttg_footer.png">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" role="group"
                                                                    aria-label="23 / 23"
                                                                    style="margin-top: 10px; width: 94.3333px; margin-right: 10px;">
                                                                    <div class="game-icon">
                                                                        <img
                                                                            src="https://images.linkcdn.cloud/global/logo-footer/slot/jok_footer.png">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Add Pagination -->
                                                            <div
                                                                class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                                                                <span
                                                                    class="swiper-pagination-bullet swiper-pagination-bullet-active"
                                                                    tabindex="0" role="button"
                                                                    aria-label="Go to slide 1"></span><span
                                                                    class="swiper-pagination-bullet" tabindex="0"
                                                                    role="button"
                                                                    aria-label="Go to slide 2"></span><span
                                                                    class="swiper-pagination-bullet" tabindex="0"
                                                                    role="button"
                                                                    aria-label="Go to slide 3"></span><span
                                                                    class="swiper-pagination-bullet" tabindex="0"
                                                                    role="button"
                                                                    aria-label="Go to slide 4"></span><span
                                                                    class="swiper-pagination-bullet" tabindex="0"
                                                                    role="button"
                                                                    aria-label="Go to slide 5"></span><span
                                                                    class="swiper-pagination-bullet" tabindex="0"
                                                                    role="button"
                                                                    aria-label="Go to slide 6"></span><span
                                                                    class="swiper-pagination-bullet" tabindex="0"
                                                                    role="button"
                                                                    aria-label="Go to slide 7"></span><span
                                                                    class="swiper-pagination-bullet" tabindex="0"
                                                                    role="button"
                                                                    aria-label="Go to slide 8"></span><span
                                                                    class="swiper-pagination-bullet" tabindex="0"
                                                                    role="button"
                                                                    aria-label="Go to slide 9"></span><span
                                                                    class="swiper-pagination-bullet" tabindex="0"
                                                                    role="button"
                                                                    aria-label="Go to slide 10"></span></div>
                                                            <span class="swiper-notification" aria-live="assertive"
                                                                aria-atomic="true"></span>
                                                        </div>
                                                    </div>
                                                    <div class="bonus-button">
                                                        <button class="btn-custom bonus-info"
                                                            onclick="buttonInfoBonus(this)"
                                                            data-item="[{&quot;id&quot;:28401,&quot;uuid&quot;:&quot;6f69b636-4bab-4017-9993-8d6fe45bdab0&quot;,&quot;branchId&quot;:779,&quot;currency&quot;:&quot;IDR&quot;,&quot;eventCode&quot;:&quot;bonus-new-member-slot-200%&quot;,&quot;eventTitle&quot;:&quot;BONUS NEW MEMBER SLOT 200%&quot;,&quot;eventDescription&quot;:&quot;BONUS NEW MEMBER SLOT 200%&quot;,&quot;groupId&quot;:1,&quot;playerLevel&quot;:&quot;9&quot;,&quot;playerType&quot;:0,&quot;givenType&quot;:1,&quot;promoType&quot;:1,&quot;promoTypeInfo&quot;:&quot;-&quot;,&quot;recurring&quot;:1,&quot;minDeposit&quot;:50,&quot;fixBonus&quot;:100,&quot;bonusMode&quot;:1,&quot;calcType&quot;:0,&quot;promoRate&quot;:&quot;1.00&quot;,&quot;turnOver&quot;:20,&quot;totalPlayer&quot;:100000,&quot;totalAmount&quot;:999999999,&quot;gameList&quot;:&quot;[\&quot;JLI\&quot;,\&quot;AFG\&quot;,\&quot;RED\&quot;,\&quot;NLC\&quot;,\&quot;VIV\&quot;,\&quot;SPR\&quot;,\&quot;FAC\&quot;,\&quot;FSP\&quot;,\&quot;JDB\&quot;,\&quot;PGS\&quot;,\&quot;HYD\&quot;,\&quot;AMB\&quot;,\&quot;CQ9\&quot;,\&quot;VRT\&quot;,\&quot;PLS\&quot;,\&quot;PNG\&quot;,\&quot;MIC\&quot;,\&quot;PRA\&quot;,\&quot;AIS\&quot;,\&quot;HCG\&quot;,\&quot;ADV\&quot;,\&quot;NLS\&quot;,\&quot;SPD\&quot;,\&quot;HBN\&quot;,\&quot;TTG\&quot;,\&quot;JOK\&quot;,\&quot;PLA\&quot;]&quot;,&quot;expiry&quot;:30,&quot;promoStatus&quot;:1,&quot;startDate&quot;:&quot;2023-11-08 00:00:00&quot;,&quot;endDate&quot;:&quot;2024-12-31 23:59:59&quot;,&quot;autoCancel&quot;:0,&quot;autoRelease&quot;:1,&quot;betLimit&quot;:0,&quot;lockWalletIn&quot;:1,&quot;lockWalletOut&quot;:1,&quot;createdAt&quot;:&quot;2023-11-08 14:13:03&quot;,&quot;updatedAt&quot;:&quot;2023-11-15 20:13:35&quot;,&quot;softDelete&quot;:0,&quot;maxDeposit&quot;:100,&quot;gameData&quot;:{&quot;JLI&quot;:{&quot;name&quot;:&quot;JILI&quot;,&quot;icon&quot;:&quot; https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/jli_footer.webp &quot;},&quot;AFG&quot;:{&quot;name&quot;:&quot;AFB GAMING&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/afg_footer.png&quot;},&quot;RED&quot;:{&quot;name&quot;:&quot;RED TIGER&quot;,&quot;icon&quot;:&quot; https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/rtr_footer.webp &quot;},&quot;NLC&quot;:{&quot;name&quot;:&quot;NOLIMIT CITY&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/nlc_footer.png&quot;},&quot;VIV&quot;:&quot;&quot;,&quot;SPR&quot;:&quot;&quot;,&quot;FAC&quot;:{&quot;name&quot;:&quot;FA CHAI&quot;,&quot;icon&quot;:&quot; https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/fac_footer.webp &quot;},&quot;FSP&quot;:{&quot;name&quot;:&quot;FASTSPIN&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/fastspin_footer.png&quot;},&quot;JDB&quot;:{&quot;name&quot;:&quot;JDB&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/casino\/jdb_footer.png&quot;},&quot;PGS&quot;:{&quot;name&quot;:&quot;PG SOFT&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/pgs_footer.png&quot;},&quot;HYD&quot;:{&quot;name&quot;:&quot;HYDAKO&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/hyd_footer.png&quot;},&quot;AMB&quot;:{&quot;name&quot;:&quot;AMEBA&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/amb_footer.png&quot;},&quot;CQ9&quot;:{&quot;name&quot;:&quot;CQ9&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/cq9_footer.png&quot;},&quot;VRT&quot;:{&quot;name&quot;:&quot;VIRTUAL TECH&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/vrt_footer.png&quot;},&quot;PLS&quot;:{&quot;name&quot;:&quot;PLAYSTAR&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/pls_footer.png&quot;},&quot;PNG&quot;:{&quot;name&quot;:&quot;PLAY N GO&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/png_footer.png&quot;},&quot;MIC&quot;:{&quot;name&quot;:&quot;MICROGAMING&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/micro_logo.png&quot;},&quot;PRA&quot;:{&quot;name&quot;:&quot;PRAGMATIC PLAY&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/casino\/plc_footer.png&quot;},&quot;AIS&quot;:&quot;&quot;,&quot;HCG&quot;:{&quot;name&quot;:&quot;HC GAME&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/hcg_footer.png&quot;},&quot;ADV&quot;:{&quot;name&quot;:&quot;ADVANTPLAY&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/adv_footer.png&quot;},&quot;NLS&quot;:{&quot;name&quot;:&quot;N2LIVE SLOT&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/casino\/nli_footer.png&quot;},&quot;SPD&quot;:{&quot;name&quot;:&quot;SPADE GAMING&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/spd_footer.png&quot;},&quot;HBN&quot;:{&quot;name&quot;:&quot;HABANERO&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/hbn_footer.png&quot;},&quot;TTG&quot;:{&quot;name&quot;:&quot;TOP TREND GAMING&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/ttg_footer.png&quot;},&quot;JOK&quot;:{&quot;name&quot;:&quot;JOKER GAMING&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/jok_footer.png&quot;},&quot;PLA&quot;:&quot;&quot;}}]"
                                                            data-toggle="modal"
                                                            data-target="#infoClaimBonus">Info</button>
                                                        <div id="bonusButton">
                                                            <button class="btn-custom bonus-claim"
                                                                data-item="[{&quot;id&quot;:28401,&quot;uuid&quot;:&quot;6f69b636-4bab-4017-9993-8d6fe45bdab0&quot;,&quot;branchId&quot;:779,&quot;currency&quot;:&quot;IDR&quot;,&quot;eventCode&quot;:&quot;bonus-new-member-slot-200%&quot;,&quot;eventTitle&quot;:&quot;BONUS NEW MEMBER SLOT 200%&quot;,&quot;eventDescription&quot;:&quot;BONUS NEW MEMBER SLOT 200%&quot;,&quot;groupId&quot;:1,&quot;playerLevel&quot;:&quot;9&quot;,&quot;playerType&quot;:0,&quot;givenType&quot;:1,&quot;promoType&quot;:1,&quot;promoTypeInfo&quot;:&quot;-&quot;,&quot;recurring&quot;:1,&quot;minDeposit&quot;:50,&quot;fixBonus&quot;:100,&quot;bonusMode&quot;:1,&quot;calcType&quot;:0,&quot;promoRate&quot;:&quot;1.00&quot;,&quot;turnOver&quot;:20,&quot;totalPlayer&quot;:100000,&quot;totalAmount&quot;:999999999,&quot;gameList&quot;:&quot;[\&quot;JLI\&quot;,\&quot;AFG\&quot;,\&quot;RED\&quot;,\&quot;NLC\&quot;,\&quot;VIV\&quot;,\&quot;SPR\&quot;,\&quot;FAC\&quot;,\&quot;FSP\&quot;,\&quot;JDB\&quot;,\&quot;PGS\&quot;,\&quot;HYD\&quot;,\&quot;AMB\&quot;,\&quot;CQ9\&quot;,\&quot;VRT\&quot;,\&quot;PLS\&quot;,\&quot;PNG\&quot;,\&quot;MIC\&quot;,\&quot;PRA\&quot;,\&quot;AIS\&quot;,\&quot;HCG\&quot;,\&quot;ADV\&quot;,\&quot;NLS\&quot;,\&quot;SPD\&quot;,\&quot;HBN\&quot;,\&quot;TTG\&quot;,\&quot;JOK\&quot;,\&quot;PLA\&quot;]&quot;,&quot;expiry&quot;:30,&quot;promoStatus&quot;:1,&quot;startDate&quot;:&quot;2023-11-08 00:00:00&quot;,&quot;endDate&quot;:&quot;2024-12-31 23:59:59&quot;,&quot;autoCancel&quot;:0,&quot;autoRelease&quot;:1,&quot;betLimit&quot;:0,&quot;lockWalletIn&quot;:1,&quot;lockWalletOut&quot;:1,&quot;createdAt&quot;:&quot;2023-11-08 14:13:03&quot;,&quot;updatedAt&quot;:&quot;2023-11-15 20:13:35&quot;,&quot;softDelete&quot;:0,&quot;maxDeposit&quot;:100,&quot;gameData&quot;:{&quot;JLI&quot;:{&quot;name&quot;:&quot;JILI&quot;,&quot;icon&quot;:&quot; https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/jli_footer.webp &quot;},&quot;AFG&quot;:{&quot;name&quot;:&quot;AFB GAMING&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/afg_footer.png&quot;},&quot;RED&quot;:{&quot;name&quot;:&quot;RED TIGER&quot;,&quot;icon&quot;:&quot; https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/rtr_footer.webp &quot;},&quot;NLC&quot;:{&quot;name&quot;:&quot;NOLIMIT CITY&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/nlc_footer.png&quot;},&quot;VIV&quot;:&quot;&quot;,&quot;SPR&quot;:&quot;&quot;,&quot;FAC&quot;:{&quot;name&quot;:&quot;FA CHAI&quot;,&quot;icon&quot;:&quot; https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/fac_footer.webp &quot;},&quot;FSP&quot;:{&quot;name&quot;:&quot;FASTSPIN&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/fastspin_footer.png&quot;},&quot;JDB&quot;:{&quot;name&quot;:&quot;JDB&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/casino\/jdb_footer.png&quot;},&quot;PGS&quot;:{&quot;name&quot;:&quot;PG SOFT&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/pgs_footer.png&quot;},&quot;HYD&quot;:{&quot;name&quot;:&quot;HYDAKO&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/hyd_footer.png&quot;},&quot;AMB&quot;:{&quot;name&quot;:&quot;AMEBA&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/amb_footer.png&quot;},&quot;CQ9&quot;:{&quot;name&quot;:&quot;CQ9&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/cq9_footer.png&quot;},&quot;VRT&quot;:{&quot;name&quot;:&quot;VIRTUAL TECH&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/vrt_footer.png&quot;},&quot;PLS&quot;:{&quot;name&quot;:&quot;PLAYSTAR&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/pls_footer.png&quot;},&quot;PNG&quot;:{&quot;name&quot;:&quot;PLAY N GO&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/png_footer.png&quot;},&quot;MIC&quot;:{&quot;name&quot;:&quot;MICROGAMING&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/micro_logo.png&quot;},&quot;PRA&quot;:{&quot;name&quot;:&quot;PRAGMATIC PLAY&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/casino\/plc_footer.png&quot;},&quot;AIS&quot;:&quot;&quot;,&quot;HCG&quot;:{&quot;name&quot;:&quot;HC GAME&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/hcg_footer.png&quot;},&quot;ADV&quot;:{&quot;name&quot;:&quot;ADVANTPLAY&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/adv_footer.png&quot;},&quot;NLS&quot;:{&quot;name&quot;:&quot;N2LIVE SLOT&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/casino\/nli_footer.png&quot;},&quot;SPD&quot;:{&quot;name&quot;:&quot;SPADE GAMING&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/spd_footer.png&quot;},&quot;HBN&quot;:{&quot;name&quot;:&quot;HABANERO&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/hbn_footer.png&quot;},&quot;TTG&quot;:{&quot;name&quot;:&quot;TOP TREND GAMING&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/ttg_footer.png&quot;},&quot;JOK&quot;:{&quot;name&quot;:&quot;JOKER GAMING&quot;,&quot;icon&quot;:&quot;https:\/\/images.linkcdn.cloud\/global\/logo-footer\/slot\/jok_footer.png&quot;},&quot;PLA&quot;:&quot;&quot;}}]"
                                                                onclick="buttonClaimBonus(this)">Ambil</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-cashback" role="tabpanel"
                        aria-labelledby="nav-cashback-tab">
                        <div class="transaksi-bonus" style="display: block;">
                            <div id="cashbackPage">
                                <div class="claim-bonus">
                                    <div class="claim-title">
                                        <h5>CASHBACK TERSEDIA</h5>
                                    </div>
                                    <div class="bonus-list" id="listBonus">
                                        <div class="row">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="footer__provider">
            <div class="container-fluid">
                <div class="provider-header">PROVIDER</div>
                <div class="provider-holder">
                    <div class="provider-content">
                        <div class="provider-title">
                            <img title="Slot" alt="Slot"
                                src="https://images.linkcdn.cloud/global/icon-footer/Slot.png" width="20"
                                height="20">
                            <span>SLOT</span>
                        </div>
                        <div class="provider-logo">
                            <img alt="FASTSPIN" title="FASTSPIN"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/fastspin_footer.png"
                                width="100" height="50">
                            <img alt="Pragmatic Play" title="Pragmatic Play"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/plc_footer.png"
                                width="100" height="50">
                            <img alt="Spade Gaming" title="Spade Gaming"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/spd_footer.png"
                                width="100" height="50">
                            <img alt="N2Live Slot" title="N2Live Slot"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/nli_footer.png"
                                width="100" height="50">
                            <img alt="PG Soft" title="PG Soft"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/pgs_footer.png"
                                width="100" height="50">
                            <img alt="Fa Chai" title="Fa Chai"
                                src=" https://images.linkcdn.cloud/global/logo-footer/slot/fac_footer.webp "
                                width="100" height="50">
                            <img alt="JILI" title="JILI"
                                src=" https://images.linkcdn.cloud/global/logo-footer/slot/jli_footer.webp "
                                width="100" height="50">
                            <img alt="RED TIGER" title="RED TIGER"
                                src=" https://images.linkcdn.cloud/global/logo-footer/slot/rtr_footer.webp "
                                width="100" height="50">
                            <img alt="Afb Gaming" title="Afb Gaming"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/afg_footer.png"
                                width="100" height="50">
                            <img alt="AIS GAMING" title="AIS GAMING"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/aisg_footer.webp"
                                width="100" height="50">
                            <img alt="HC Game" title="HC Game"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/hcg_footer.png"
                                width="100" height="50">
                            <img alt="Advantplay" title="Advantplay"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/adv_footer.png"
                                width="100" height="50">
                            <img alt="JDB" title="JDB"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/jdb_footer.png"
                                width="100" height="50">
                            <img alt="NoLimit City" title="NoLimit City"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/nlc_footer.png"
                                width="100" height="50">
                            <img alt="Playstar" title="Playstar"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/pls_footer.png"
                                width="100" height="50">
                            <img alt="Joker Gaming" title="Joker Gaming"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/jok_footer.png"
                                width="100" height="50">
                            <img alt="Habanero" title="Habanero"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/hbn_footer.png"
                                width="100" height="50">
                            <img alt="CQ9 Gaming" title="CQ9 Gaming"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/cq9_footer.png"
                                width="100" height="50">
                            <img alt="Virtual Tech" title="Virtual Tech"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/vrt_footer.png"
                                width="100" height="50">
                            <img alt="Ameba" title="Ameba"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/amb_footer.png"
                                width="100" height="50">
                            <img alt="Top Trend Gaming" title="Top Trend Gaming"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/ttg_footer.png"
                                width="100" height="50">
                            <img alt="Microgaming" title="Microgaming"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/micro_logo.png"
                                width="100" height="50">
                            <img alt="Playtech Slot" title="Playtech Slot"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/pla_footer.png"
                                width="100" height="50">
                            <img alt="Play N Go" title="Play N Go"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/png_footer.png"
                                width="100" height="50">
                            <img alt="Hydako" title="Hydako"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/hyd_footer.png"
                                width="100" height="50">
                        </div>
                    </div>
                    <div class="provider-content">
                        <div class="provider-title">
                            <img title="Casino" alt="Casino"
                                src="https://images.linkcdn.cloud/global/icon-footer/Casino.png" width="20"
                                height="20">
                            <span>CASINO</span>
                        </div>
                        <div class="provider-logo">
                            <img alt="AFB CASINO" title="AFB CASINO"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/afc_footer.webp"
                                width="100" height="50">
                            <img alt="Pragmatic Play LC" title="Pragmatic Play LC"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/plc_footer.png"
                                width="100" height="50">
                            <img alt="WE CASINO" title="WE CASINO"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/wec_footer.webp"
                                width="100" height="50">
                            <img alt="GD88" title="GD88"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/gd8_footer.png"
                                width="100" height="50">
                            <img alt="WM Casino" title="WM Casino"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/wmc_footer.png"
                                width="100" height="50">
                            <img alt="OG Casino" title="OG Casino"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/ogs_footer.png"
                                width="100" height="50">
                            <img alt="Evolution" title="Evolution"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/evolution_footer.webp"
                                width="100" height="50">
                            <img alt="ALLBET" title="ALLBET"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/alb_footer.png"
                                width="100" height="50">
                            <img alt="Dream Gaming" title="Dream Gaming"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/drg_footer.png"
                                width="100" height="50">
                            <img alt="Asia Gaming" title="Asia Gaming"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/agc_footer.png"
                                width="100" height="50">
                            <img alt="Sexy Gaming" title="Sexy Gaming"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/seg_footer.png"
                                width="100" height="50">
                            <img alt="LG88" title="LG88"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/lg8_footer.png"
                                width="100" height="50">
                            <img alt="N2Live" title="N2Live"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/nli_footer.png"
                                width="100" height="50">
                        </div>
                    </div>
                    <div class="provider-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="provider-title">
                                    <img title="Sportsbook" alt="Sportsbook"
                                        src="https://images.linkcdn.cloud/global/icon-footer/Sport.png"
                                        width="20" height="20">
                                    <span>SPORTSBOOK</span>
                                </div>
                                <div class="provider-logo">
                                    <img alt="AFB88" title="AFB88"
                                        src="https://images.linkcdn.cloud/global/logo-footer/sports/afb_footer.png"
                                        width="100" height="50">
                                    <img alt="IA E-SPORT" title="IA E-SPORT"
                                        src="https://images.linkcdn.cloud/global/logo-footer/sports/iae_footer.png"
                                        width="100" height="50">
                                    <img alt="SBO SPORT" title="SBO SPORT"
                                        src="https://images.linkcdn.cloud/global/logo-footer/sports/sbo_footer.png"
                                        width="100" height="50">
                                    <img alt="CMD368" title="CMD368"
                                        src="https://images.linkcdn.cloud/global/logo-footer/sports/cmd_footer.png"
                                        width="100" height="50">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="provider-title">
                                    <img title="Arcade" alt="Arcade"
                                        src="https://images.linkcdn.cloud/global/icon-footer/Arcade.png"
                                        width="20" height="20">
                                    <span>ARCADE</span>
                                </div>
                                <div class="provider-logo">
                                    <img alt="Spaceman" title="Spaceman"
                                        src="https://images.linkcdn.cloud/global/logo-footer/casino/spaceman_footer.webp"
                                        width="100" height="50">
                                    <img alt="Joker Gaming" title="Joker Gaming"
                                        src="https://images.linkcdn.cloud/global/logo-footer/slot/jok_footer.png"
                                        width="100" height="50">
                                    <img alt="Spade Gaming" title="Spade Gaming"
                                        src="https://images.linkcdn.cloud/global/logo-footer/slot/spd_footer.png"
                                        width="100" height="50">
                                    <img alt="Playstar" title="Playstar"
                                        src="https://images.linkcdn.cloud/global/logo-footer/slot/pls_footer.png"
                                        width="100" height="50">
                                    <img alt="CQ9" title="CQ9"
                                        src="https://images.linkcdn.cloud/global/logo-footer/slot/cq9_footer.png"
                                        width="100" height="50">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="provider-content">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="provider-title">
                                    <img title="Live Game" alt="Live Game"
                                        src="https://images.linkcdn.cloud/global/icon-footer/Game Lain.png"
                                        width="20" height="20">
                                    <span>LIVE GAME</span>
                                </div>
                                <div class="provider-logo">
                                    <img alt="LIVE GAME" title="LIVE GAME"
                                        src="https://images.linkcdn.cloud/global/logo-footer/others/lvg_footer.png"
                                        width="100" height="50">
                                    <img alt="WS168" title="WS168"
                                        src="https://images.linkcdn.cloud/global/logo-footer/others/ws1_footer.png"
                                        width="100" height="50">
                                    <img alt="MIKI Gaming" title="MIKI Gaming"
                                        src="https://images.linkcdn.cloud/global/logo-footer/others/miki_footer.png"
                                        width="100" height="50">
                                    <img alt="SV388 Cockfight" title="SV388 Cockfight"
                                        src="https://images.linkcdn.cloud/global/logo-footer/others/sv3_footer.png"
                                        width="100" height="50">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="provider-title">
                                    <img title="Lottery" alt="Lottery"
                                        src="https://images.linkcdn.cloud/global/icon-footer/Lottery.png"
                                        width="20" height="20">
                                    <span>LOTTERY</span>
                                </div>
                                <div class="provider-logo">
                                    <img alt="4D" title="4D"
                                        src="https://images.linkcdn.cloud/global/logo-footer/lottery/tog_footer.png"
                                        width="100" height="50">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="provider-nav">
                    <a href="" class="provider-link">+21</a>
                    <a href="/news" class="provider-link">Berita</a>
                    <a href="/promotion" class="provider-link">Promosi</a>
                    <a href="/help#About" class="provider-link">Tentang Kami</a>
                    <a href="/contact" class="provider-link">Kontak Kami</a>
                    <a href="/help" class="provider-link">Persyaratan &amp; Ketentuan</a>
                    <a href="/help#FAQ" class="provider-link">FAQ</a>
                    <a href="/feedback" class="provider-link">Laporan ke Pusat</a>
                </div>
            </div>
        </div>
        <div class="footer__trademark">Copyright © 2021 - 2024
            mahacuan is an international registered trademark. All rights reserved.</div>
    </footer>


    <div class="footer-mobile">
        <a class="footer-item " href="https://mahacuan.live">
            <div class="footer-icon">
                <img src="https://mahacuan.live/themes/1/img/navigation/home.svg" width="60">
            </div>
            <div class="footer-title">Home</div>
        </a>
        <a class="footer-item" href="https://mahacuan.live/transaction">
            <div class="footer-icon">
                <img src="https://mahacuan.live/themes/1/img/navigation/deposit.svg" width="60">
            </div>
            <div class="footer-title">Deposit</div>
        </a>
        <a class="footer-item footer-login" href="#" data-toggle="modal" data-target="#categoryProvModal">
            <div class="footer-icon">
                <img src="https://mahacuan.live/themes/1/img/navigation/playgame.svg" width="60">
            </div>
            <div class="footer-title">Permainan</div>
        </a>
        <a class="footer-item " href="javascript:;" onclick="routeNav('/promotion')">
            <div class="footer-icon">
                <img src="https://mahacuan.live/themes/1/img/navigation/promo.svg" width="60">
            </div>
            <div class="footer-title">Promosi</div>
        </a>
        <a class="footer-item" target="_blank" rel="noreferrer" href="https://direct.lc.chat/15301668/">
            <div class="footer-icon">
                <img src="https://mahacuan.live/themes/1/img/navigation/livechat.svg" width="60">
            </div>
            <div class="footer-title">Live Chat</div>
        </a>
    </div>

    <div class="modal custom-popup fade" id="categoryProvModal" tabindex="-1"
        aria-labelledby="categoryProvModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup-category-modal">
                        <div class="category-modal-header">
                            <h4>Permainan</h4>
                        </div>
                        <div class="category-modal-template-1">
                            <a href="javascript:;" onclick="routeNav('/popular')">
                                <div class="category-item">
                                    <div class="icon">
                                        <img src="https://mahacuan.live/themes/1/img/navigation/popular.svg"
                                            width="50" height="50">
                                    </div>
                                    <div class="name">Popular</div>
                                </div>
                            </a>
                            <a href="javascript:;" onclick="routeNav('/sportsbook')">
                                <div class="category-item">
                                    <div class="icon">
                                        <img src="https://mahacuan.live/themes/1/img/navigation/sport.svg"
                                            width="50" height="50">
                                    </div>
                                    <div class="name">SPORTS</div>
                                </div>
                            </a>
                            <a href="javascript:;" onclick="routeNav('/slot')">
                                <div class="category-item">
                                    <div class="icon">
                                        <img src="https://mahacuan.live/themes/1/img/navigation/slot.svg"
                                            width="50" height="50">
                                    </div>
                                    <div class="name">SLOT</div>
                                </div>
                            </a>
                            <a href="javascript:;" onclick="routeNav('/casino')">
                                <div class="category-item">
                                    <div class="icon">
                                        <img src="https://mahacuan.live/themes/1/img/navigation/casino.svg"
                                            width="50" height="50">
                                    </div>
                                    <div class="name">CASINO</div>
                                </div>
                            </a>
                            <a href="javascript:;" onclick="routeNav('/lottery')">
                                <div class="category-item">
                                    <div class="icon">
                                        <img src="https://mahacuan.live/themes/1/img/navigation/lottery.svg"
                                            width="50" height="50">
                                    </div>
                                    <div class="name">LOTTERY</div>
                                </div>
                            </a>
                            <a href="javascript:;" onclick="routeNav('/arcade')">
                                <div class="category-item">
                                    <div class="icon">
                                        <img src="https://mahacuan.live/themes/1/img/navigation/arcade.svg"
                                            width="50" height="50">
                                    </div>
                                    <div class="name">ARCADE</div>
                                </div>
                            </a>
                            <a href="javascript:;" onclick="routeNav('/livegames')">
                                <div class="category-item">
                                    <div class="icon">
                                        <img src="https://mahacuan.live/themes/1/img/navigation/other.svg"
                                            width="50" height="50">
                                    </div>
                                    <div class="name">LIVE GAMES</div>
                                </div>
                            </a>
                        </div>
                        <div class="category-button">
                            <a class="btn-custom-sm" id="depositModal"
                                href="https://mahacuan.live/transaction#deposit">Tambah Dana</a>
                            <a class="btn-custom-sm" id="withdrawModal"
                                href="https://mahacuan.live/transaction#withdraw">Tarik Dana</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://mahacuan.live/themes/1/js/vendor.js"></script>
    <script src="https://mahacuan.live/themes/1/js/global.js?v=2.0.1520"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.1.2/html5-qrcode.min.js"
        integrity="sha512-G6jTq0R9t92sQXl2n3YSL8TqmgiT4dA8PgnO1NYjFxXO2Rp6YmgP4DSyItj22ZZ3a05u4x/SY/EGk6sZ9ji8CQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript" src="https://mahacuan.live/themes/1/vendor/dateranngepicker/daterangepicker.min.js">
    </script>
    <script type="text/javascript" src="https://mahacuan.live/themes/1/js/indeks.js?v=2.0.1520"></script>
    <div class="daterangepicker ltr show-ranges opensright">
        <div class="ranges">
            <ul>
                <li data-range-key="Hari ini">Hari ini</li>
                <li data-range-key="Kemarin">Kemarin</li>
                <li data-range-key="7 Hari Terakir">7 Hari Terakir</li>
                <li data-range-key="30 Hari Terakir">30 Hari Terakir</li>
                <li data-range-key="Bulan ini">Bulan ini</li>
                <li data-range-key="Bulan lalu">Bulan lalu</li>
                <li data-range-key="Pilih Tanggal">Pilih Tanggal</li>
            </ul>
        </div>
        <div class="drp-calendar left">
            <div class="calendar-table"></div>
            <div class="calendar-time" style="display: none;"></div>
        </div>
        <div class="drp-calendar right">
            <div class="calendar-table"></div>
            <div class="calendar-time" style="display: none;"></div>
        </div>
        <div class="drp-buttons"><span class="drp-selected"></span><button
                class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button
                class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div>
    </div>
    <div class="daterangepicker ltr show-ranges opensright">
        <div class="ranges">
            <ul>
                <li data-range-key="Hari ini">Hari ini</li>
                <li data-range-key="Kemarin">Kemarin</li>
                <li data-range-key="7 Hari Terakir">7 Hari Terakir</li>
                <li data-range-key="30 Hari Terakir">30 Hari Terakir</li>
                <li data-range-key="Bulan ini">Bulan ini</li>
                <li data-range-key="Bulan lalu">Bulan lalu</li>
                <li data-range-key="Pilih Tanggal">Pilih Tanggal</li>
            </ul>
        </div>
        <div class="drp-calendar left">
            <div class="calendar-table"></div>
            <div class="calendar-time" style="display: none;"></div>
        </div>
        <div class="drp-calendar right">
            <div class="calendar-table"></div>
            <div class="calendar-time" style="display: none;"></div>
        </div>
        <div class="drp-buttons"><span class="drp-selected"></span><button
                class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button
                class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div>
    </div>
    <script type="text/javascript" src="https://mahacuan.live/themes/1/js/vendor-auth.js"></script>
    <script type="text/javascript" src="https://mahacuan.live/themes/1/vendor/dataTables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://mahacuan.live/themes/1/vendor/dataTables/dataTables.responsive.min.js">
    </script>

    <script src="https://mahacuan.live/themes/1/vendor/jquery-validate/jquery.validate.min.js"></script>
    <script>
        window.addEventListener("popstate", (event) => {
            location.reload();
        });

        $("a[name=locale-switch]").on("click", function() {
            const locale = $(this).attr('data-locale')
            $.ajax({
                type: "POST",
                url: "https://mahacuan.live/locale",
                data: {
                    _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
                    locale: locale,
                },
                success: function(res) {
                    if (res) {
                        location.reload()
                    } else {
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'error',
                            title: "Locale not supported."
                        });
                    }
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(this).scrollTop(0);
            $.ajax({
                type: "POST",
                url: "https://mahacuan.live/paymentService",
                data: {
                    _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti"
                },
                success: function(response) {
                    let wdTime = response.data.wd
                    let depoTime = response.data.depo
                    $("[id=withdrawTime]").text(wdTime)
                    $("[id=withdrawTimeBar]").attr('aria-valuenow', wdTime).width((wdTime / 15) * 100 +
                        "%")
                    $("[id=depositTime]").text(depoTime)
                    $("[id=depositTimeBar]").attr('aria-valuenow', depoTime).width((depoTime / 15) *
                        100 + "%")
                }
            });

            $(".routeTo").on("click", function() {
                const url = $(this).data("route")
                window.location.replace(url)
            });

            function getBalance() {
                $.post("https://mahacuan.live/transaction/checkBalance", {
                    _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti"
                }, (data) => {
                    let main = 0;
                    let prov = 0;
                    let mainWd = 0;
                    let pokerWd = 0;
                    $('span[name=provBalance]').text(prov.toFixed(2));
                    if ((data.success == true)) {
                        main += data.balance
                        window.mainBalance = data.commonWd
                        $.each(data.data, function(index, value) {
                            $('span[id=balance-' + index + ']').text(value.credit.toFixed(2));
                            if (value.lockedIn == true) {
                                $('#lockedIn' + index).show()
                                $('#lockedOut' + index).hide()
                                $('#locked' + index).hide()
                            }
                            if (value.lockedOut == true) {
                                $('#lockedOut' + index).show()
                                $('#lockedIn' + index).hide()
                                $('#locked' + index).hide()
                            }
                            if (value.lockedIn == true && value.lockedOut === true) {
                                $('#locked' + index).show()
                                $('#lockedIn' + index).hide()
                                $('#lockedOut' + index).hide()
                            }
                        });
                        mainWd += parseFloat(data.commonWd);
                        pokerWd += parseFloat(data.pokerWd);
                    }
                    $('span[id=balance-common-total]').text(data.common.toFixed(2));
                    $('span[id=balance-poker-total]').text(data.poker.toFixed(2));
                    $('span[name*=mainBalance]').text(main.toFixed(2));
                    $('span[id=mainDesc]').text(mainWd.toFixed(2));
                    $('span[id=pokerDesc]').text(pokerWd.toFixed(2));
                });
            }
            getBalance();
            $("a[name=refreshWallet]").on("click", function(e) {
                e.preventDefault();
                $('span[name*=mainBalance]').html(
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'
                    );
                getBalance();
            })
        });

        $('#pageLoadingBar').hide()
        window.onpopstate = function() {
            let path = window.location.pathname;
            routeNav(path);
        }

        function routeNav(path) {
            if (path == window.location.pathname) return;
            history.pushState(null, null, path);
            let url = "https://mahacuan.live" + window.location.pathname;
            if (path == '/') {
                window.location.replace("https://mahacuan.live")
                return false;
            }
            $(".header-form>a").removeClass('active')
            let elem = document.getElementById("pageLoadingBar");
            let width = 1;
            $.ajax({
                type: "GET",
                url: url,
                beforeSend: () => {
                    $('#pageLoadingBar').show()
                    let id = setInterval(frame, 100);

                    function frame() {
                        if (width >= 100) {
                            clearInterval(id);
                        } else {
                            width++;
                            elem.style.width = width + '%';
                        }
                    }
                },
                success: function(page) {
                    width = 100;
                    elem.style.width = width + '%';
                    $("main[id=main-route]").empty().append(page);
                    $("title").text($("#title-seo").text());
                    const script = $("scope-script").html()
                    $("scope-script").remove()
                    setTimeout(() => {
                        $("html, body").animate({
                            scrollTop: "0"
                        }, 1000);
                        $('#pageLoadingBar').hide()
                        elem.style.width = '1%';
                        $("custom-script").empty().append(script);
                        filterGameSelection('all')
                    }, 500);
                    let checkPath = path.split('/')
                }
            });
        }
    </script>
    <script>
        const html5QrCode = new Html5Qrcode( /* element id */ "reader");

        // File based scanning
        const fileinput = document.getElementById('qr-input-file');
        fileinput.addEventListener('change', e => {
            if (e.target.files.length == 0) {

                // No file selected, ignore
                return;
            }

            const imageFile = e.target.files[0];

            let ele = document.getElementById('error-message');

            // Scan QR Code
            html5QrCode.scanFile(imageFile, true)
                .then(qrCodeMessage => {

                    // success, use qrCodeMessage
                    document.getElementById("voucher_code").value = qrCodeMessage;
                    ele.style.display = "none";
                })
                .catch(err => {

                    // failure, handle it.
                    document.getElementById("voucher_code").value = "";
                    ele.innerHTML = `Error scanning file. Reason: ${err}`;
                    ele.style.display = "block";
                });
        });

        $("button[id=submitVoucher]").on('click', (e) => {
            e.preventDefault()
            $.ajax({
                type: "POST",
                url: "https://mahacuan.live/transaction/claimVoucher",
                data: {
                    _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
                    voucherCode: $("input[id=voucher_code]").val()
                },
                success: function(res) {
                    $("#voucherModal").modal('hide');
                    $("input[id=voucher_code]").val('');
                    Swal.fire({
                        icon: (res.success == true) ? 'success' : 'error',
                        html: res.message,
                        timerProgressBar: true,
                        showButtonConfirm: false,
                        timer: 3000
                    })
                }
            });
        });
    </script>
    <script type="text/javascript">
        var swiperSport = new Swiper('.sport-swiper', {
            slidesPerView: 4,
            spaceBetween: 20,
            breakpoints: {
                1600: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                1280: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                }
            },
            navigation: {
                nextEl: ".navigation-next--sport",
                prevEl: ".navigation-prev--sport",
            },
        });
        var swiperSlot = new Swiper('.slot-swiper', {
            slidesPerView: 4,
            spaceBetween: 20,
            breakpoints: {
                1600: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                1280: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                }
            },
            navigation: {
                nextEl: ".navigation-next--slot",
                prevEl: ".navigation-prev--slot",
            },
        });
        var swiperFishing = new Swiper('.fishing-swiper', {
            slidesPerView: 3,
            spaceBetween: 20,
            breakpoints: {
                1600: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1440: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1280: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                }
            },
            navigation: {
                nextEl: ".navigation-next--fishing",
                prevEl: ".navigation-prev--fishing",
            },
        });
        var swiperCasino = new Swiper('.casino-swiper', {
            slidesPerView: 4,
            spaceBetween: 10,
            breakpoints: {
                1920: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                1600: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                1280: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                }
            },
            navigation: {
                nextEl: ".navigation-next--casino",
                prevEl: ".navigation-prev--casino",
            },
        });
        var swiperLottery = new Swiper('.lottery-swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: ".navigation-next--lottery",
                prevEl: ".navigation-prev--lottery",
            },
        });
    </script>

    <script>
        function maxInputAmount(wallet) {
            const amountWd = $("#withdrawAmount")
            const maxWd = parseFloat(amountWd.attr('max'))
            let walletAvail = parseFloat($(`#${wallet}Desc`).text())
            walletAvail = isNaN(walletAvail) ? 0 : walletAvail;
            if (walletAvail != 0) {
                if (walletAvail < maxWd) {
                    amountWd.attr('max', walletAvail)
                }
            }
        }

        window.showError = (title, message) => {
            return Swal.fire({
                icon: 'info',
                title: title,
                html: message,
                timerProgressBar: true,
                timer: 5000,
            });
        }

        $(".game-search>.form-control-sm").on("focus", function() {
            if ($(this).val().length == 0) {
                $(".game-search").width('100%');
                $(".form-control-sm").width('100%');
            }
        })

        $(".game-search>.form-control-sm").on("focusout", function() {
            if ($(this).val().length == 0) {
                $(".game-search").width('');
                $(".form-control-sm").width('');
            }
        })
    </script>
    <!-- Start of LiveChat (www.livechat.com) code -->
    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 15301668;;
        (function(n, t, c) {
            function i(n) {
                return e._h ? e._h.apply(null, n) : e._q.push(n)
            }
            var e = {
                _q: [],
                _h: null,
                _v: "2.0",
                on: function() {
                    i(["on", c.call(arguments)])
                },
                once: function() {
                    i(["once", c.call(arguments)])
                },
                off: function() {
                    i(["off", c.call(arguments)])
                },
                get: function() {
                    if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                    return i(["get", c.call(arguments)])
                },
                call: function() {
                    i(["call", c.call(arguments)])
                },
                init: function() {
                    var n = t.createElement("script");
                    n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js",
                        t.head.appendChild(n)
                }
            };
            !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
        }(window, document, [].slice))
    </script>
    <noscript><a href="https://www.livechat.com/chat-with/15301668/" rel="nofollow">Chat with us</a>, powered by <a
            href="https://www.livechat.com/?welcome" rel="noopener nofollow"
            target="_blank">LiveChat</a></noscript>
    <!-- End of LiveChat code -->








    <custom-script>
        <script>
            function pushStateUrlOnTabShow(elementId) {
                (history.pushState) ? history.pushState(null, null, `#${elementId}`): location.hash = `#${elementId}`;
            }

            $(".button-pills").on('click', function(e) {
                e.preventDefault();
                if (this.id == "nav-claim-tab") {
                    getPromo()
                }
                if (this.id == "nav-cashback-tab") {
                    getCashback()
                }
                pushStateUrlOnTabShow(this.id.split('-')[1]);
                $('.tabs-sidebar').removeClass('active');
                $('#' + this.id.split('-')[1] + 'Sidebar li').addClass('active');
            });

            if (location.hash == "#claim") {
                $('#nav-claim-tab').click()
                $('.tabs-sidebar').removeClass('active');
                $('#claimSidebar li').addClass('active');
            } else if (location.hash == "#withdraw") {
                $('#nav-withdraw-tab').click();
                $('.tabs-sidebar').removeClass('active');
                $('#withdrawSidebar li').addClass('active');
            } else if (location.hash == "#cashback") {
                $('#nav-cashback-tab').click();
                $('.tabs-sidebar').removeClass('active');
                $('#cashbackSidebar li').addClass('active');
            } else {
                (history.pushState) ? history.pushState(null, null, '#deposit'): location.hash = '#deposit';
                $('.tabs-sidebar').removeClass('active');
                $('#depositSidebar li').addClass('active');
            }

            function tableDepoWdHistory(tableId, dataSource) {
                tableId.DataTable({
                    processing: true,
                    searching: false,
                    responsive: false,
                    paging: true,
                    data: dataSource,
                    columns: [{
                            data: null,
                            sortable: false,
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            data: 'CreatedAt',
                            sortable: false,
                            render: function(data, type, row, meta) {
                                return new Date(data).toLocaleString('en-GB', {
                                    year: 'numeric',
                                    month: 'short',
                                    day: 'numeric',
                                    hour: 'numeric',
                                    minute: 'numeric',
                                    second: 'numeric'
                                })
                            }
                        },
                        {
                            data: 'AmountProcessed',
                            render: $.fn.dataTable.render.number(',', '.', 0, '')
                        },
                        {
                            data: 'Status',
                            render: function(data, type, row, meta) {
                                return `
                        ${ (data === 0) ? '<div class="table-status pending">Pending</div>' : '' }
                        ${ (data === 1) ? '<div class="table-status approved">Approved</div>' : '' }
                        ${ (data === 2) ? '<div class="table-status rejected">Rejected</div>' : '' }
                        ${ (data === 3) ? '<div class="table-status pending">In Progress</div>' : '' }
                        ${ (data === 4) ? '<div class="table-status rejected">Cancelled</div>' : '' }
                    `;
                            }
                        },
                    ],
                });
            }

            function tableAdjustmentHistory(tableId, dataSource) {
                tableId.DataTable({
                    processing: true,
                    searching: false,
                    responsive: false,
                    paging: true,
                    data: dataSource,
                    columns: [{
                            data: null,
                            sortable: false,
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            data: 'CreatedAt',
                            sortable: false,
                            render: function(data, type, row, meta) {
                                return new Date(data).toLocaleString('en-GB', {
                                    year: 'numeric',
                                    month: 'short',
                                    day: 'numeric',
                                    hour: 'numeric',
                                    minute: 'numeric',
                                    second: 'numeric'
                                })
                            }
                        },
                        {
                            data: 'AmountProcessed'
                        },
                        {
                            data: 'Status',
                            render: function(data, type, row, meta) {
                                return `
                        ${ (data === 0) ? '<div class="table-status pending">Pending</div>' : '' }
                        ${ (data === 1) ? '<div class="table-status approved">Approved</div>' : '' }
                        ${ (data === 2) ? '<div class="table-status rejected">Rejected</div>' : '' }
                        ${ (data === 3) ? '<div class="table-status pending">In Progress</div>' : '' }
                        ${ (data === 4) ? '<div class="table-status rejected">Cancelled</div>' : '' }
                    `;
                            }
                        },
                    ],
                });
            }

            function tableCashbackHistory(tableId, dataSource) {
                tableId.DataTable({
                    processing: true,
                    searching: false,
                    responsive: false,
                    paging: true,
                    data: dataSource,
                    columns: [{
                            data: null,
                            sortable: false,
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            data: 'end_date',
                            sortable: false,
                            render: function(data, type, row, meta) {
                                return row.start_date + ' - ' + row.end_date;
                            }
                        },
                        {
                            data: 'category'
                        },
                        {
                            data: 'winlose'
                        },
                        {
                            data: 'cashback'
                        },
                    ],
                });
            }

            $(".money").on('keyup change', function() {
                const id = this.id
                const val = $(`#${id}`).val();
                const currency = $(`#${id}Text`).data("currency");
                let result = 0;
                (currency == "IDR" || currency == "VND") ? result += val * 1000: result += val
                $(`#${id}Text`).val(`${currency}: ${result.toLocaleString()}`);
            });

            function allowedKey(event, regex) {
                let reg = new RegExp(regex);
                let k = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                if (!reg.test(k)) {
                    event.preventDefault();
                    return false;
                }
            }

            $('input[name=claimAmount], #depositAmount, #withdrawAmount').bind('keypress', function(event) {
                return allowedKey(event, "^[0-9]+$")
            });

            function getPromo() {
                $.ajax({
                    type: "GET",
                    url: "https://mahacuan.live/transaction/getPromo",
                    beforeSend: () => {
                        $("#promoPage").empty()
                    },
                    success: function(data) {
                        setTimeout(() => {
                            $("#promoPage").empty().append(data);
                            (() => {
                                var swiper = new Swiper('.prog-game-swiper', {
                                    slidesPerView: 3,
                                    slidesPerColumn: 2,
                                    slidesPerColumnFill: 'row',
                                    direction: 'horizontal',
                                    spaceBetween: 10,
                                    observer: true,
                                    observeParents: true,
                                    pagination: {
                                        el: '.swiper-pagination',
                                        clickable: true,
                                    },
                                });
                            })()
                        }, 500);
                    }
                });
            }

            function getCashback() {
                $.ajax({
                    type: "GET",
                    url: "https://mahacuan.live/transaction/getCashback",
                    beforeSend: () => {
                        $("#cashbackPage").empty()
                    },
                    success: function(data) {
                        $("#cashbackPage").empty().append(data);
                        setTimeout(() => {
                            $("[name=registerCashback]").click(function(e) {
                                e.preventDefault();
                                Swal.fire({
                                    title: "Perhatian.",
                                    text: "Apakah anda yakin akan mengambil cashback ini?",
                                    showCancelButton: true,
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OK",
                                    cancelButtonText: "Batal",
                                }).then((res) => {
                                    if (res.isConfirmed == true) {
                                        $.ajax({
                                            type: "POST",
                                            url: "https://mahacuan.live/transaction/registerCashback",
                                            data: {
                                                _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
                                                uuid: $(this).data('item')
                                            },
                                            success: function(response) {
                                                if (response.success == true) {
                                                    Swal.fire({
                                                        icon: 'info',
                                                        title: "Berhasil.",
                                                        html: response
                                                            .msg,
                                                        timerProgressBar: true,
                                                        showButtonConfirm: false,
                                                        timer: 2000,
                                                    });
                                                } else {
                                                    Swal.fire({
                                                        icon: 'error',
                                                        title: "Perhatian.",
                                                        html: response
                                                            .msg,
                                                        timerProgressBar: true,
                                                        showButtonConfirm: false,
                                                        timer: 2000,
                                                    });
                                                }
                                                setTimeout(() => {
                                                    location.reload()
                                                }, 2000);
                                            }
                                        });
                                    }
                                })
                            });
                        });
                    }
                });
            }

            function viewCashbackWl() {
                let dateRange = JSON.parse($("select[name='cashbackRange']").val());
                $.ajax({
                    type: "POST",
                    url: "https://mahacuan.live/bonus/getCashbackTurnOver",
                    data: {
                        _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
                        startDate: dateRange.startDate,
                        endDate: dateRange.endDate
                    },
                    success: function(response) {
                        $('#cashbackHistoryTable').DataTable().clear().destroy()
                        tableCashbackHistory($('#cashbackHistoryTable'), response);
                    }
                });
            }
        </script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js">
        </script>
        <script>
            $(document).ready(function() {});

            function checkDepoStatus(trxId) {
                $.ajax({
                    type: "POST",
                    url: "https://mahacuan.live/transaction/checkDepositStatus",
                    data: {
                        _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
                        trxId: trxId
                    },
                    success: function(response) {
                        if (response.success) {
                            $.showPaydiaQr(null, false)
                            location.reload();
                        }
                    }
                });
            }

            function showBankDetail(val) {
                $(".walletDest").show()
                const cat = $('#bankSelect :selected').parent().attr('label');
                const selected = $('#bankSelect').find('option:selected');
                const min = selected.data('min')
                const max = selected.data('max')
                const rate = selected.data('rate')
                const code = selected.data('code')
                const currency = "IDR"
                $('input[id=depositAmount]').attr('min', min)
                $('input[id=depositAmount]').attr('max', max)
                $('.bankOption').hide();
                $('#' + cat + '-' + val).show();
                if (cat == "phonecredit") {
                    $("#depositAmount").attr("placeholder", "...")
                    $("#amountDesc").text("Contoh: setoran deposit 50.000, tulis Rp 50 ( 3 digit dihilangkan )")
                    if (rate == 100) {
                        $(".walletDest").hide()
                        $("select[name=walletDestination]").val("main").trigger('change')
                    }
                    $('label[id=notesLabel]').html("Serial Number / <br/> Nomor pengirim")
                    $('[id=chooseMode]').addClass("input-group")
                    $('[id=chooseMode] > .input-group-prepend').show()
                    $("span[id=chooseModeText]").text("SN")
                    $("#notes").attr("placeholder", "Serial Number")
                    $("span[id=chooseModeSN]").on("click", function(e) {
                        $("span[id=chooseModeText]").text("SN")
                        $("input[name=phoneCreditMode]").val("")
                        $("#notes").attr("placeholder", "Serial Number")
                    })
                    $("span[id=chooseModeHP]").on("click", function(e) {
                        $("span[id=chooseModeText]").text("HP")
                        $("input[name=phoneCreditMode]").val("91dc2695-4dcd-4be2-90dd-e7d8387b3e35")
                        $("#notes").attr("placeholder", "Nomor pengirim")
                    })
                } else if (cat == "crypto") {
                    $("#amountDesc").text("Jumlah deposit Anda akan diproses sesuai dengan rate yang tertera")
                    $("#depositAmount").attr("placeholder", code.toUpperCase())
                } else {
                    $("#amountDesc").text("Contoh: setoran deposit 50.000, tulis Rp 50 ( 3 digit dihilangkan )")
                    $("#depositAmount").attr("placeholder", "...")
                    $('label[id=notesLabel]').text("Keterangan")
                    $('[id=chooseMode]').removeClass("input-group")
                    $('[id=chooseMode] > .input-group-prepend').hide()
                    $("#notes").attr("placeholder", "Keterangan")
                }
            }

            $("#depositAmount").on('keyup change', function() {
                const selected = $('#bankSelect').find('option:selected');
                const rate = selected.data('rate')
                const code = selected.data('code')
                amountRealDeposit(code, rate)
            })

            function amountRealDeposit(code, rate) {
                const val = $(`#depositAmount`).val();
                const currency = $(`#depositAmountText`).data("currency");
                let result = 0;
                if ((currency == "IDR" || currency == "VND") && code != "usdt") {
                    result += val * 1000
                } else {
                    result += val * rate
                }
                $(`#depositAmountText`).val(`${currency.toUpperCase()}: ${result.toLocaleString()}`);
            }

            $('#bankSelect').change(function() {
                if ($(this).val() == "") {
                    $('.bankOption').hide()
                    $(".walletDest").hide()
                    return false
                }
                showBankDetail($(this).val());
            });

            function autoChangeBank() {
                let accNumb = $('#memberBankSelect').find('option:selected').data('accountnumber').toString().match(/.{1,4}/g)
                    .join(' ');
                let mbrBank = $('#memberBankSelect').find('option:selected').data('code').toLowerCase()
                let valSelected = $(`#bankSelect option[data-code="${mbrBank}"]`).val();
                (valSelected == "undefined") ? valSelected = "": valSelected = valSelected
                $('#bankSelect').val(valSelected).change()
            }
            autoChangeBank()
            $('#memberBankSelect').change(function() {
                autoChangeBank()
            });

            $("#depositRange").on('apply.daterangepicker', function(ev, picker) {
                const payloads = {
                    _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
                    startDate: picker.startDate.format('YYYY-MM-DD') + ' 00:00:00',
                    endDate: picker.endDate.format('YYYY-MM-DD') + ' 23:59:59',
                    historyType: $("input[name=historyType]:checked").val(),
                }
                $.ajax({
                    type: "POST",
                    url: "https://mahacuan.live/transaction/getDepositHistory",
                    data: payloads,
                    success: function(response) {
                        $('#depositHistoryTable').DataTable().clear().destroy()
                        tableDepoWdHistory($('#depositHistoryTable'), response.data);
                    }
                });
            });
            $('#proof').bind('change', function() {
                const imgSize = (this.files[0].size);
                if (imgSize > 1048576) {
                    Swal.fire("Perhatian.", "Ukuran gambar harus kurang dari 1Mb", 'error');
                    $(this).val("");
                }
            });

            $("form[id=formDeposit]").validate({
                onkeyup: false,
                rules: {
                    bank: {
                        required: true
                    },
                    amount: {
                        required: true
                    },
                    notes: {
                        maxlength: 100
                    }
                },
                messages: {
                    bank: {
                        required: "Bank wajib diisi."
                    },
                    amount: {
                        required: "Amount wajib diisi.",
                        min: "Deposit tidak boleh kurang dari minimal.",
                        max: "Deposit tidak boleh melebihi maximal."
                    },
                    notes: {
                        maxlength: "Notes maksimal berisi 32 karakter."
                    }
                },
                errorPlacement: function(error, element) {
                    let error_id = element.attr("id")
                    error.insertAfter($(`span[id=${error_id}-error]`))
                },
                highlight: function(element, errorClass) {
                    $(element).closest(".form-control").addClass("is-invalid");
                },
                unhighlight: function(element, errorClass) {
                    $(element).closest(".form-control").removeClass("is-invalid").addClass("is-valid");
                },
            });

            function serialNumberValidate() {
                const cat = $('#bankSelect :selected').parent().attr('label');
                if (cat == "phonecredit") {
                    if ($("input[name=notes]").val().length == 0) {
                        $("input[name=notes]").addClass("is-invalid")
                        return false;
                    } else {
                        $("input[name=notes]").addClass("is-valid")
                        return true
                    }
                }
            }

            $.showPaydiaQr = function(data, isPaydia = false) {
                if (data != null) {
                    $("#amountPaydia").text("Rp " + (data.amount * 1000))
                    $("#qrCode").qrcode(data.paydiaQr)
                }
                if (isPaydia) {
                    (() => {
                        $(".transaksi-formulir").addClass("active")
                        $(".flip-front").hide()
                        $(".flip-back").show()
                    })()
                    return true
                } else {
                    (() => {
                        $(".transaksi-formulir").removeClass("active")
                        $(".flip-front").show()
                        $(".flip-back").hide()
                    })()
                    return false
                }
            }

            function downloadQr() {
                let cnvs = document.querySelector("#qrCode canvas");
                let img = cnvs.toDataURL("image/png");
                let dl = document.createElement('a');
                dl.setAttribute('href', img);
                dl.setAttribute('download', 'qrcode.png');
                dl.click();
            }

            $("form[id=formDeposit]").on("submit", function(e) {
                e.preventDefault()
                if (serialNumberValidate() == false) {
                    return false
                }
                const files = $("input[name=proof]")[0].files;
                let formData = new FormData();
                if (files.length > 0) {
                    formData.append('proof', files[0]);
                }
                formData.append('_token', "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti");
                formData.append('bankMember', $("select[name=bankMember]").val());
                formData.append('bank', $("select[name=bank]").val());
                formData.append('walletDestination', $("select[name=walletDestination]").val());
                formData.append('amount', $("input[name=amount]").val());
                formData.append('phoneCreditMode', $("input[name=phoneCreditMode]").val());
                formData.append('notes', $("input[name=notes]").val());
                $.ajax({
                    type: "POST",
                    url: "https://mahacuan.live/transaction/deposit",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('.form-control').removeClass('is-valid').removeClass('is-invalid')
                        $("form[id=formDeposit]")[0].reset()
                        $('.bankOption').hide();
                        $(".walletDest").hide()
                        if (response.success == true) {
                            Swal.fire({
                                icon: 'success',
                                title: "Berhasil.",
                                html: response.message,
                                timerProgressBar: true,
                                showButtonConfirm: false,
                                timer: 2000,
                            }).then(() => {
                                if (response.data.qrcode) {
                                    if (response.data.redirectUrl != null) {
                                        setTimeout(() => {
                                            window.open(response.data.redirectUrl);
                                            return false
                                        });
                                    } else {
                                        setTimeout(() => {
                                            return $.showPaydiaQr(response.data.rawQr, true)
                                        });
                                    }
                                } else {
                                    return false
                                }
                            });
                        } else {
                            Swal.fire({
                                icon: 'warning',
                                title: "Perhatian.",
                                html: response.message,
                                timerProgressBar: true,
                                showButtonConfirm: false,
                                timer: 2000
                            })
                        }
                    },
                    error: (e) => {
                        $('.form-control').removeClass('is-valid').removeClass('is-invalid')
                        $("form[id=formDeposit]")[0].reset()
                        $('.bankOption').hide();
                        $(".walletDest").hide()
                        let msg = '';
                        $.each(e.responseJSON.errors, function(index, valueOfElement) {
                            msg += valueOfElement + '<br />'
                        });
                        Swal.fire({
                            icon: 'error',
                            title: "Perhatian.",
                            html: (msg == '') ?
                                "Mohon maaf atas ketidaknyamanannya, halaman ini akan dimuat ulang dalam 5 detik" :
                                msg,
                            timerProgressBar: true,
                            showButtonConfirm: false,
                            timer: 2000
                        });
                        if (msg == '') {
                            location.reload();
                        }
                    }
                });
            });

            $("button[id=submitBank]").hide()
            $('.add-bank').click(function() {
                $('.form-control').removeClass('is-valid').removeClass('is-invalid')
                $('input[name="newData"]').val("true")
                $("form[id=addOptBankForm]")[0].reset()
                $('.add-bank-form').slideToggle();
                const $this = $(this);
                $this.toggleClass('add-bank');
                if ($this.hasClass('add-bank')) {
                    $("button[id=submitBank]").hide()
                    $this.text("Tambah Rek.");
                } else {
                    $("button[id=submitBank]").show()
                    $this.text("Batal");
                }
            });

            $("form[id=addOptBankForm]").validate({
                onkeyup: false,
                rules: {
                    chooseOptionalBank: {
                        required: true
                    },
                    optAccountNumber: {
                        required: true,
                        validatePhone: true
                    },
                },
                messages: {
                    chooseOptionalBank: {
                        required: "Bank wajib diisi.",
                    },
                    optAccountNumber: {
                        required: "Account Number wajib diisi.",
                    }
                },
                errorPlacement: function(error, element) {
                    let error_id = element.attr("id")
                    error.insertAfter($(`span[id=${error_id}-error]`))
                },
                highlight: function(element, errorClass) {
                    $(element).closest(".form-control").addClass("is-invalid");
                },
                unhighlight: function(element, errorClass) {
                    $(element).closest(".form-control").removeClass("is-invalid").addClass("is-valid");
                }
            });

            $('form[id=addOptBankForm]').on('submit', function(e) {
                e.preventDefault()
                let endpoint = "https://mahacuan.live/profile/optionalBankCreate";
                if ($('input[name="newData"]').val() != "true") {
                    endpoint = "https://mahacuan.live/profile/optionalBankCreate/" + $('input[name="newData"]').val();
                }
                let sel = document.getElementById('chooseOptionalBank');
                let selected = sel.options[sel.selectedIndex];
                let choosed = selected.getAttribute('data-id');
                const cat = $('select[id=chooseOptionalBank] :selected').parent().attr('label');
                $.ajax({
                    type: "POST",
                    url: endpoint,
                    data: {
                        _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
                        accountName: $('input[name=optAccountName]').val(),
                        bank: choosed,
                        accountNumber: (cat == "bank") ? $('input[name=optAccountNumber]').val() : '0' + $(
                            'input[name=optAccountNumber]').val()
                    },
                    success: function(response) {
                        $('input[name="newData"]').val("true")
                        $('.cancel').click();
                        if (response.success == true) {
                            optionalBankList()
                            setTimeout(() => {
                                location.reload()
                            }, 1000);
                        } else {
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                icon: 'error',
                                title: response.message
                            });
                        }
                    }
                })
            })

            $('#bankDetail').on('show.bs.modal', () => {
                const cat = $('select[id=chooseOptionalBank] :selected').parent().attr('label');
                $("#phoneInputPrepend").hide()
                optionalBankList()
            })

            $("select[id=chooseOptionalBank]").on("change", function(e) {
                e.preventDefault()
                const cat = $('select[id=chooseOptionalBank] :selected').parent().attr('label');
                if (cat == "bank") {
                    $("#phoneInputPrepend").hide()
                    $("#labelAccNumb").text("Nomor Rek.");
                    const max = $("select[id=chooseOptionalBank]").find(':selected').data('max')
                    const min = $("select[id=chooseOptionalBank]").find(':selected').data('min')
                    if (max == 0) {
                        $("input[name=optAccountNumber]").removeAttr("minlength").removeAttr("maxlength")
                        return false
                    }
                    $("input[name=optAccountNumber]").attr("minlength", min).attr("maxlength", max)
                } else {
                    $("#phoneInputPrepend").show()
                    $("#labelAccNumb").text("Nomor Ponsel*");
                    $("input[name=optAccountNumber]").removeAttr("minlength").removeAttr("maxlength")
                    $("input[name=optAccountNumber]").on('input propertychange paste', function() {
                        var reg = /^0+/gi;
                        if (this.value.match(reg)) {
                            this.value = this.value.replace(reg, '');
                        }
                    });
                }
            })
            jQuery.validator.addMethod("validatePhone", function(value, element) {
                if ($('select[id=chooseOptionalBank] :selected').parent().attr('label') != "bank" && $(
                        "input[name=optAccountNumber]").val()[0] != 8) {
                    return false;
                } else {
                    return true;
                }
            }, "Nomor ponsel tidak valid, mohon periksa kembali nomor ponsel anda.");

            function optionalBankList() {
                $.ajax({
                    type: "POST",
                    url: "https://mahacuan.live/profile/optionalBankList",
                    data: {
                        _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti"
                    },
                    success: function(response) {
                        $("#bankButton").show()
                        if (response.data == null) {
                            $("#otherBank").load(location.href + " #otherBank");
                        } else {
                            if (response.data.length == 5) {
                                $("#bankButton").hide()
                            }
                        }
                        if (response.success == true) {
                            let data = response.data
                            let html = ''
                            $.each(data, function(key, value) {
                                html += otherBankTemplate(value);
                            });
                            $("#otherBank").html(html);
                        }
                    }
                });
            }

            function otherBankTemplate(value) {
                return `
    <div class="bank-account">
        <div class="acc-details">
            <div class="row">
                <div class="col-lg-12">
                    <div class="acc-name">Nama Rek.: <span>${value.accountName}</span></div>
                </div>
                <div class="col-lg-6">
                    <div class="bank-name">Nama Bank: <span>${value.bank.toUpperCase()}</span></div>
                </div>
                <div class="col-lg-6">
                    <div class="acc-number">Nomor Rek.: <span>${value.accountNumber}</span></div>
                </div>
            </div>
        </div>
    </div>
    `;
            }

            $('a[name=copyAddress]').on('click', function(e) {
                e.preventDefault();
                const code = this.id;
                const htmlExist = $(this).html();
                const buttonText = $("span[name=buttonCopy]").html()
                const addressText = $(`#addressText-${code}`)[0];
                $("span[name=buttonCopy]").html(
                    `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <span class="loading"></span>`
                    )
                let temp = document.createRange();
                temp.selectNodeContents(addressText)
                let select = window.getSelection();
                select.removeAllRanges();
                select.addRange(temp)
                document.execCommand("copy");
                setTimeout(() => {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: "Berhasil di copy.."
                    });
                    $(this).html(htmlExist)
                    $("span[name=buttonCopy]").html(buttonText)
                }, 1000)
            });
        </script>
        <script>
            $("#pokerDesc").hide()
            $("#walletSelectWithdraw").on("change", function(e) {
                e.preventDefault()
                $("span[class=originDesc]").hide()
                $(`#${$(this).val()}Desc`).show()
                maxInputAmount($(this).val())
            })
            maxInputAmount($("#walletSelectWithdraw").val())

            $("#withdrawRange").on('apply.daterangepicker', function(ev, picker) {
                const payloads = {
                    _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
                    startDate: picker.startDate.format('YYYY-MM-DD') + ' 00:00:00',
                    endDate: picker.endDate.format('YYYY-MM-DD') + ' 23:59:59',
                }
                $.ajax({
                    type: "POST",
                    url: "https://mahacuan.live/transaction/getWithdrawHistory",
                    data: payloads,
                    success: function(response) {
                        $('#withdrawHistoryTable').DataTable().clear().destroy()
                        tableDepoWdHistory($('#withdrawHistoryTable'), response.data);
                    }
                });
            });

            function transferToMain(callback) {
                $.post("https://mahacuan.live/transaction/transferToMain", {
                    _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
                    walletOrigin: $("select[name=walletOrigin]").val()
                }, (data) => data.data);
                let timeClose = 5,
                    displayText = "Saldo Anda sedang dikalkulasi dalam #1 detik.",
                    timer;

                Swal.fire({
                    icon: 'info',
                    title: "Mohon tunggu",
                    html: displayText.replace(/#1/, `<strong>${timeClose}</strong>`),
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    timerProgressBar: true,
                    timer: 5000,
                });

                timer = setInterval(function() {
                    timeClose--;
                    if (timeClose == 0) {
                        clearInterval(timer);
                        Swal.close()
                    }
                    $('.swal2-html-container').html(displayText.replace(/#1/, `<strong>${timeClose}</strong>`));
                }, 1000);
                setTimeout(() => {
                    callback()
                }, 5000);
            }

            $("form[id=formWithdraw]").validate({
                onkeyup: false,
                rules: {
                    amount: {
                        required: true,
                    },
                },
                messages: {
                    amount: {
                        required: "Amount wajib diisi.",
                        min: "Withdraw tidak boleh kurang dari " + " {0}",
                        max: "Withdraw tidak boleh melebihi " + " {0}"
                    },
                },
                errorPlacement: function(error, element) {
                    let error_id = element.attr("id")
                    error.insertAfter($(`span[id=${error_id}-error]`))
                },
                highlight: function(element, errorClass) {
                    $(element).closest(".form-control").addClass("is-invalid");
                },
                unhighlight: function(element, errorClass) {
                    $(element).closest(".form-control").removeClass("is-invalid").addClass("is-valid");
                },
            });

            $("form[id=formWithdraw]").on("submit", function(e) {
                e.preventDefault()
                if ($("form[id=formWithdraw]").valid()) {
                    transferToMain(() => {
                        const payloads = {
                            _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
                            bankDestination: $("select[name=bankDestination]").val(),
                            walletOrigin: $("select[name=walletOrigin]").val(),
                            amount: $("input[id=withdrawAmount]").val()
                        }
                        $.ajax({
                            type: "POST",
                            url: "https://mahacuan.live/transaction/withdraw",
                            data: payloads,
                            success: function(response) {
                                $('.form-control').removeClass('is-valid').removeClass('is-invalid')
                                $("form[id=formWithdraw]")[0].reset()
                                if (response.success == true) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: "Berhasil.",
                                        html: response.message,
                                        timer: 2000
                                    })
                                    $("a[name=refreshWallet]").click()
                                } else {
                                    Swal.fire({
                                        icon: 'warning',
                                        title: "Perhatian.",
                                        html: response.message,
                                        timer: 2000
                                    })
                                }
                            }
                        });
                    })
                }
            })
        </script>
        <!-- Info Claim Bonus -->
        <div class="modal custom-popup fade" id="infoClaimBonus" tabindex="-1"
            aria-labelledby="infoClaimBonusLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-header">
                        <h5 class="modal-title"></h5>
                    </div>
                    <div class="modal-body">
                        <div class="claim-info"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--Claim Bonus -->
        <div class="modal custom-popup fade" id="claimBonus" tabindex="-1" aria-labelledby="claimBonusLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-body">
                        <input type="hidden" name="promoId" value="">
                        <div class="popup-claim">
                            <h3>Klaim Promo Anda Sekarang !</h3>
                            <div class="claim-provider">
                                <h6>Pilih Provider</h6>
                                <select class="form-control" name="chooseProvider" id="chooseProvider"></select>
                                <span class="text-danger" id="chooseProvider-error"></span>
                            </div>
                            <div class="claim-counter">
                                <button type="button" class="btn-custom minus">-</button>
                                <input type="text" name="claimAmount" class="claim-bonus-counter form-control"
                                    min="" max="">
                                <button type="button" class="btn-custom add">+</button>
                            </div>
                            <div class="claim-provider">
                                <h6>Bonus Saldo</h6>
                                <input class="claim-bonus-counter form-control" id="claimed" data-currency="IDR"
                                    placeholder="IDR" autocomplete="false" disabled="">
                            </div>
                            <div class="claim-button row justify-content-around">
                                <button type="button" id="joinPromo" class="btn-custom claim">Ambil</button>
                                <button type="button" data-dismiss="modal"
                                    class="btn-custom cancel">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const mapping = {
                'givenType': {
                    "1": "Bonus Awal",
                    "2": "Bonus Ekstra"
                },
                'promoType': {
                    "1": "Sekali",
                    "2": "Harian",
                    "3": "Mingguan",
                    "4": "Bulanan",
                    "5": "Setiap saat"
                }
            }

            function buttonInfoBonus(obj) {
                const data = $(obj).data('item');
                $.each(data, function(key, value) {
                    let iconArr = '';
                    $.each(value.gameData, (i, icon) => iconArr += (icon) ? "<img class=p-1 src=" + icon.icon +
                        " title=" + icon.name + " alt=" + icon.name + ">" : "");
                    $("#infoClaimBonus .modal-title").text(value.eventTitle)
                    let body = `
            <div class="claim-info-item">
                <div class="title">Keterangan</div>
                <div class="desc">${value.eventDescription}</div>
            </div>

            <div class="claim-info-item">
                <div class="title">Jenis Pemberian</div>
                <div class="desc">${mapping.givenType[value.givenType]}</div>
            </div>

            <div class="claim-info-item">
                <div class="title">Jenis Promosi</div>
                <div class="desc">${mapping.promoType[value.promoType]}</div>
            </div>

            <div class="claim-info-item">
                <div class="title">Min Deposit</div>
                <div class="desc">${value.minDeposit}</div>
            </div>

            <div class="claim-info-item">
                <div class="title">Max Deposit</div>
                <div class="desc">${parseFloat(value.maxDeposit).toFixed(2)}</div>
            </div>

            <div class="claim-info-item">
                <div class="title">Tanggal Mulai</div>
                <div class="desc">${value.startDate}</div>
            </div>

            <div class="claim-info-item">
                <div class="title">Tanggal Berakhir</div>
                <div class="desc">${value.endDate}</div>
            </div>

            <div class="claim-info-item">
                <div class="title">Provider Support</div>
            </div>

            <div class="claim-info-img d-flex flex-wrap align-items-center justify-content-center">
                ${iconArr}
            </div>
        `;
                    $("#infoClaimBonus .modal-body .claim-info").html(body)
                });
            };

            function buttonClaimBonus(obj) {
                let data = [];
                $.each($(obj).data('item'), function(key, value) {
                    data = value;
                });
                $("#claimBonus").find("input[name=promoId]").val(data.uuid);
                let minDepo = parseInt(data.minDeposit);
                let maxDepo = parseInt(data.maxDeposit);
                const inputAmount = $("input[name=claimAmount]")
                inputAmount.attr('min', minDepo).attr('max', maxDepo);
                inputAmount.val(minDepo);
                if (~~window.mainBalance < minDepo) {
                    Swal.fire({
                        icon: 'info',
                        title: "Perhatian !",
                        html: "Saldo Anda tidak cukup untuk mengambil promo ini.",
                        timerProgressBar: true,
                        timer: 5000,
                    });
                    return false;
                };
                $("#claimBonus").modal('show');
                inputAmount.bind('keypress', function(event) {
                    return allowedKey(event, "^[0-9]+$")
                });
                let claimed = (parseFloat(data.promoRate) == 0) ? data.fixBonus : inputAmount.val() * parseFloat(data
                .promoRate);
                let inputClaimed = $("input[id=claimed]");
                inputClaimed.val(`${inputClaimed.data("currency")}  ${claimed.toFixed(2)}`)

                inputAmount.on("keyup change", function() {
                    let max;
                    if (parseInt(~~window.mainBalance) < $(this).attr('max')) {
                        max = ~~window.mainBalance
                    } else {
                        max = maxDepo;
                    }
                    if (this.value > max) {
                        this.value = max;
                    }
                    claimed = (parseFloat(data.promoRate) == 0) ? data.fixBonus : this.value * parseFloat(data
                        .promoRate);
                    inputClaimed.val(`${inputClaimed.data("currency")}  ${claimed.toFixed(2)}`)
                });

                var opt = "<option value=''>-- Pilih Provider --</option>";
                $.each(data.gameData, function(key, value) {
                    opt += (value) ? `<option value="${key}">${value.name}</option>` : ""
                });
                $("#chooseProvider").html(opt);
            };

            $('button[id=joinPromo]').on('click', function(e) {
                e.preventDefault();
                const selProv = $("select[name=chooseProvider]")
                if (selProv.val() == '') {
                    selProv.addClass("is-invalid")
                    $("span[id=chooseProvider-error]").text("Provider wajib diisi.")
                    setTimeout(() => {
                        selProv.removeClass("is-invalid")
                        $("span[id=chooseProvider-error]").text("")
                    }, 2500);
                    return false
                }
                joinPromo(selProv.val(), $("input[name=claimAmount]").val(), $("input[name=promoId]").val())
                return false;
            })

            function joinPromo(providerCode, amount, promoId) {
                $.ajax({
                    type: "POST",
                    url: "https://mahacuan.live/transaction/claimPromo",
                    data: {
                        _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
                        providerCode: providerCode,
                        amount: amount,
                        promoId: promoId
                    },
                    beforeSend: function() {
                        Swal.fire({
                            title: '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>',
                            html: "Mohon tunggu...",
                            allowOutsideClick: false,
                            showCancelButton: false,
                            showConfirmButton: false
                        });
                    },
                    success: function(response) {
                        if (response.success == true) {
                            Swal.fire({
                                icon: 'info',
                                title: "Berhasil.",
                                html: response.data.msg,
                                timerProgressBar: true,
                                showButtonConfirm: false,
                                timer: 2000,
                            });
                            setTimeout(() => {
                                $('.modal').modal('hide');
                                getPromo();
                            }, 2000)
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: "Perhatian.",
                                html: response.error.msg,
                                timerProgressBar: true,
                                showButtonConfirm: false,
                                timer: 2000,
                            });
                        }
                    }
                });
            };

            $('.claim-counter .btn-custom').on('click', function(e) {
                e.preventDefault();
                let $input = $('.claim-bonus-counter[type="text"]');
                let $val = $input.val();

                if (!isNaN($val)) {
                    if ($(this).hasClass('minus')) {
                        if ($val > $input.attr('min')) {
                            $input.val(parseInt($val) - 1).change();
                        }
                        if (parseInt($input.val()) == $input.attr('min')) {
                            $(this).attr('disabled', true);
                        }
                    } else if ($(this).hasClass('add')) {
                        if ($val < parseInt($input.attr('max'))) {
                            $input.val(parseInt($val) + 1).change();
                        }
                        if (parseInt($input.val()) == parseInt($input.attr('max'))) {
                            $(this).attr('disabled', true);
                        }
                    }
                } else {
                    $input.val(0);
                }
                if (parseInt($val) >= parseInt($input.attr('min'))) {
                    $('.minus').removeAttr('disabled');
                }
                if (parseInt($val) <= parseInt($input.attr('max'))) {
                    $('.add').removeAttr('disabled');
                }
            });
        </script>
        <script>
            function buttonCancelBonus(val) {
                Swal.fire({
                    title: "Perhatian.",
                    text: "Apakah Anda yakin ingin membatalkan promo ini?",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "OK",
                    cancelButtonText: "Batal",
                }).then((res) => {
                    if (res.isConfirmed == true) {
                        setTimeout(() => {
                            const promoId = $(val).data("promo-id");
                            $.ajax({
                                type: "POST",
                                url: "https://mahacuan.live/transaction/deletePromo",
                                data: {
                                    _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
                                    promoId: promoId
                                },
                                success: function(response) {
                                    if (response.success == true) {
                                        Swal.fire({
                                            icon: 'info',
                                            title: "Berhasil.",
                                            html: response.data.msg,
                                            timerProgressBar: true,
                                            showButtonConfirm: false,
                                            timer: 2000,
                                        });
                                        setTimeout(() => {
                                            $(val).text("Pending").attr('disabled', 'true');
                                        }, 0);
                                    } else {
                                        Swal.fire({
                                            icon: 'error',
                                            title: "Perhatian.",
                                            html: response.error.msg,
                                            timerProgressBar: true,
                                            showButtonConfirm: false,
                                            timer: 2000,
                                        });
                                    }
                                }
                            });
                        }, 200);
                    } else {
                        return false;
                    }
                });
            };
        </script>
    </custom-script>

    <script type="text/javascript">
        var swiper = new Swiper('.mobile-category-swiper', {
            slidesPerView: 4,
            spaceBetween: 10,
            slidesPerGroup: 4,
            loopFillGroupWithBlank: true,
            navigation: {
                nextEl: ".navigation-next--category",
                prevEl: ".navigation-prev--category",
            },
        });
    </script>
    <div id="chat-widget-container"
        style="opacity: 1; visibility: visible; z-index: 2147483639; position: fixed; bottom: 0px; width: 84px; height: 84px; max-width: 100%; max-height: calc(100% + 0px); min-height: 0px; min-width: 0px; background-color: transparent; border: 0px; overflow: hidden; right: 0px; transition: none 0s ease 0s !important;">
        <iframe allow="autoplay; microphone *; camera *; display-capture *; picture-in-picture *; fullscreen *;"
            src="https://secure.livechatinc.com/customer/action/open_chat?license_id=15301668&amp;group=0&amp;embedded=1&amp;widget_version=3&amp;unique_groups=0"
            allowtransparency="true" id="chat-widget" name="chat-widget" title="LiveChat chat widget"
            scrolling="no"
            style="width: 100%; height: 100%; min-height: 0px; min-width: 0px; margin: 0px; padding: 0px; background-image: none; background-position: 0% 0%; background-size: initial; background-attachment: scroll; background-origin: initial; background-clip: initial; background-color: rgba(0, 0, 0, 0); border-width: 0px; float: none; color-scheme: normal; position: absolute; inset: 0px; transition: none 0s ease 0s !important; display: none; visibility: hidden;"></iframe><iframe
            allowtransparency="true" id="chat-widget-minimized" name="chat-widget-minimized"
            title="LiveChat chat widget" scrolling="no"
            style="width: 100%; height: 100%; min-height: 0px; min-width: 0px; margin: 0px; padding: 0px; background-image: none; background-position: 0% 0%; background-size: initial; background-attachment: scroll; background-origin: initial; background-clip: initial; background-color: rgba(0, 0, 0, 0); border-width: 0px; float: none; color-scheme: normal; display: block;"></iframe>
    </div>
</body>

</html>
