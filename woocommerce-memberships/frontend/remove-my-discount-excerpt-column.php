<?php  // only copy this line if needed

/**
 * Remove the "Excerpt" column from the My Discounts section of the member area
 *
 * @param array $columns the columns in the "My Discounts" table
 * @return array $columns the updated array of columns
 */
function sv_wc_memberships_my_membership_discounts_columns( $columns ) {
    unset( $columns['membership-discount-excerpt'] );
    return $columns;
}
add_filter('wc_memberships_members_area_my_membership_discounts_column_names', 'sv_wc_memberships_my_membership_discounts_columns', 10, 1 );
