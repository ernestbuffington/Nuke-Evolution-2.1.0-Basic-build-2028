<table width="100%" cellspacing="2" cellpadding="2"  align="center">
    <tr>
        <td align="left" class="nav">
            <a href="{U_INDEX}" class="nav">{L_INDEX}</a>
        </td>
    </tr>
</table>

<table class="forumline" width="100%" cellspacing="1" cellpadding="3"  align="center">
    <tr>
        <th class="thHead">
            {L_FAQ_TITLE}
        </th>
    </tr>
    <tr>
        <td class="row1">
<!-- BEGIN faq_block_link -->
            <span class="gen">
                <strong>{faq_block_link.BLOCK_TITLE}</strong>
            </span>
            <br />
<!-- BEGIN faq_row_link -->
            <span class="gen">
                <a href="{faq_block_link.faq_row_link.U_FAQ_LINK}" class="postlink">{faq_block_link.faq_row_link.FAQ_LINK}</a>
            </span>
            <br />
<!-- END faq_row_link -->
            <br />
<!-- END faq_block_link -->
        </td>
    </tr>
    <tr>
        <td class="catBottom" height="28">
            &nbsp;
        </td>
    </tr>
</table>

<div style="clear:both;"></div>

<!-- BEGIN faq_block -->
<table class="forumline" width="100%" cellspacing="1" cellpadding="3"  align="center">
    <tr>
        <td class="catHead" height="28" align="center">
            <span class="cattitle">
                {faq_block.BLOCK_TITLE}
            </span>
        </td>
    </tr>
<!-- BEGIN faq_row -->
    <tr>
        <td class="{faq_block.faq_row.ROW_CLASS}" align="left" valign="top">
            <span class="postbody">
                <a name="{faq_block.faq_row.U_FAQ_ID}"></a><strong>{faq_block.faq_row.FAQ_QUESTION}</strong>
            </span>
            <br />
            <span class="postbody">
                {faq_block.faq_row.FAQ_ANSWER}<br /><a class="postlink" href="#top">{L_BACK_TO_TOP}</a>
            </span>
        </td>
    </tr>
    <tr>
        <td class="spaceRow" height="1">
            <img src="{SPACER_IMG}" alt="" width="1" height="1" />
        </td>
    </tr>
<!-- END faq_row -->
</table>

<div style="clear:both;"></div>
<!-- END faq_block -->

<table width="100%" cellspacing="2"  align="center">
    <tr>
        <td align="right" valign="middle" nowrap="nowrap">
            <span class="gensmall">
                {S_TIMEZONE}
            </span>
            <br /><br />{JUMPBOX}<br />
        </td>
    </tr>
</table>