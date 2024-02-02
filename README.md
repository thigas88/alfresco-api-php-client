# Alfresco API
This project is a fork from rhuanbarreto/alfresco-api-php-client with some improvements

**API**  Provides access to the features of Alfresco Content Services.

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
        {
            "type": "package",
            "package": {
                "name": "thigas88/alfresco-api-php-client",
                "version": "1.0",
                "source": {
                    "url": "https://github.com/thigas88/alfresco-api-php-client.git",
                    "type": "git",
                    "reference": "origin/master"
                }
            }
        }
    ],
  "require": {
    "thigas88/alfresco-api-php-client": "1.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/AlfrescoAPI/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started - Core API

Please follow the [installation procedure](#installation--usage) and then run the following for using the ***CORE API***:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
Alfresco\Configuration::getDefaultConfiguration()->setHost('http://[YOUR_ALFRESCO_HOSTNAME]:[YOUR_ALFRESCO_PORT]/alfresco/api/-default-/public/alfresco/versions/1');

$api_instance = new Alfresco\Api\ActivitiesApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.
$who = "who_example"; // string | A filter to include the user's activities only `me`, other user's activities only `others`'
$site_id = "site_id_example"; // string | Include only activity feed entries relating to this site.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->listActivitiesForPerson($person_id, $skip_count, $max_items, $who, $site_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->listActivitiesForPerson: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Getting Started - Search API

Please follow the [installation procedure](#installation--usage) and then run the following for using the ***Search API***:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
Alfresco\Configuration::getDefaultConfiguration()->setHost('http://[YOUR_ALFRESCO_HOSTNAME]:[YOUR_ALFRESCO_PORT]/alfresco/api/-default-/public/search/versions/1');

$api_instance = new Alfresco\Api\SearchApi();
$query_body = new \Alfresco\Model\SearchRequest(); // \Alfresco\Model\SearchRequest | Generic query API
$query_body->setQuery(["query" => "foo"]);

try {
    $result = $api_instance->search($query_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->search: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All CORE API URIs are relative to *https://localhost/alfresco/api/-default-/public/alfresco/versions/1*

All Search API URIs are relative to *https://localhost/alfresco/api/-default-/public/search/versions/1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ActivitiesApi* | [**listActivitiesForPerson**](docs/Api/ActivitiesApi.md#listactivitiesforperson) | **GET** /people/{personId}/activities | List activities
*AuditApi* | [**deleteAuditEntriesForAuditApp**](docs/Api/AuditApi.md#deleteauditentriesforauditapp) | **DELETE** /audit-applications/{auditApplicationId}/audit-entries | Permanently delete audit entries for an audit application
*AuditApi* | [**deleteAuditEntry**](docs/Api/AuditApi.md#deleteauditentry) | **DELETE** /audit-applications/{auditApplicationId}/audit-entries/{auditEntryId} | Permanently delete an audit entry
*AuditApi* | [**getAuditApp**](docs/Api/AuditApi.md#getauditapp) | **GET** /audit-applications/{auditApplicationId} | Get audit application info
*AuditApi* | [**getAuditEntry**](docs/Api/AuditApi.md#getauditentry) | **GET** /audit-applications/{auditApplicationId}/audit-entries/{auditEntryId} | Get audit entry
*AuditApi* | [**listAuditApps**](docs/Api/AuditApi.md#listauditapps) | **GET** /audit-applications | List audit applications
*AuditApi* | [**listAuditEntriesForAuditApp**](docs/Api/AuditApi.md#listauditentriesforauditapp) | **GET** /audit-applications/{auditApplicationId}/audit-entries | List audit entries for an audit application
*AuditApi* | [**listAuditEntriesForNode**](docs/Api/AuditApi.md#listauditentriesfornode) | **GET** /nodes/{nodeId}/audit-entries | List audit entries for a node
*AuditApi* | [**updateAuditApp**](docs/Api/AuditApi.md#updateauditapp) | **PUT** /audit-applications/{auditApplicationId} | Update audit application info
*CommentsApi* | [**createComment**](docs/Api/CommentsApi.md#createcomment) | **POST** /nodes/{nodeId}/comments | Create a comment
*CommentsApi* | [**deleteComment**](docs/Api/CommentsApi.md#deletecomment) | **DELETE** /nodes/{nodeId}/comments/{commentId} | Delete a comment
*CommentsApi* | [**listComments**](docs/Api/CommentsApi.md#listcomments) | **GET** /nodes/{nodeId}/comments | List comments
*CommentsApi* | [**updateComment**](docs/Api/CommentsApi.md#updatecomment) | **PUT** /nodes/{nodeId}/comments/{commentId} | Update a comment
*DownloadsApi* | [**cancelDownload**](docs/Api/DownloadsApi.md#canceldownload) | **DELETE** /downloads/{downloadId} | Cancel a download
*DownloadsApi* | [**createDownload**](docs/Api/DownloadsApi.md#createdownload) | **POST** /downloads | Create a new download
*DownloadsApi* | [**getDownload**](docs/Api/DownloadsApi.md#getdownload) | **GET** /downloads/{downloadId} | Get a download
*FavoritesApi* | [**createFavorite**](docs/Api/FavoritesApi.md#createfavorite) | **POST** /people/{personId}/favorites | Create a favorite
*FavoritesApi* | [**createSiteFavorite**](docs/Api/FavoritesApi.md#createsitefavorite) | **POST** /people/{personId}/favorite-sites | Create a site favorite
*FavoritesApi* | [**deleteFavorite**](docs/Api/FavoritesApi.md#deletefavorite) | **DELETE** /people/{personId}/favorites/{favoriteId} | Delete a favorite
*FavoritesApi* | [**deleteSiteFavorite**](docs/Api/FavoritesApi.md#deletesitefavorite) | **DELETE** /people/{personId}/favorite-sites/{siteId} | Delete a site favorite
*FavoritesApi* | [**getFavorite**](docs/Api/FavoritesApi.md#getfavorite) | **GET** /people/{personId}/favorites/{favoriteId} | Get a favorite
*FavoritesApi* | [**getFavoriteSite**](docs/Api/FavoritesApi.md#getfavoritesite) | **GET** /people/{personId}/favorite-sites/{siteId} | Get a favorite site
*FavoritesApi* | [**listFavoriteSitesForPerson**](docs/Api/FavoritesApi.md#listfavoritesitesforperson) | **GET** /people/{personId}/favorite-sites | List favorite sites
*FavoritesApi* | [**listFavorites**](docs/Api/FavoritesApi.md#listfavorites) | **GET** /people/{personId}/favorites | List favorites
*GroupsApi* | [**createGroup**](docs/Api/GroupsApi.md#creategroup) | **POST** /groups | Create a group
*GroupsApi* | [**createGroupMembership**](docs/Api/GroupsApi.md#creategroupmembership) | **POST** /groups/{groupId}/members | Create a group membership
*GroupsApi* | [**deleteGroup**](docs/Api/GroupsApi.md#deletegroup) | **DELETE** /groups/{groupId} | Delete a group
*GroupsApi* | [**deleteGroupMembership**](docs/Api/GroupsApi.md#deletegroupmembership) | **DELETE** /groups/{groupId}/members/{groupMemberId} | Delete a group membership
*GroupsApi* | [**getGroup**](docs/Api/GroupsApi.md#getgroup) | **GET** /groups/{groupId} | Get group details
*GroupsApi* | [**listGroupMemberships**](docs/Api/GroupsApi.md#listgroupmemberships) | **GET** /groups/{groupId}/members | List memberships of a group
*GroupsApi* | [**listGroupMembershipsForPerson**](docs/Api/GroupsApi.md#listgroupmembershipsforperson) | **GET** /people/{personId}/groups | List group memberships
*GroupsApi* | [**listGroups**](docs/Api/GroupsApi.md#listgroups) | **GET** /groups | List groups
*GroupsApi* | [**updateGroup**](docs/Api/GroupsApi.md#updategroup) | **PUT** /groups/{groupId} | Update group details
*NetworksApi* | [**getNetwork**](docs/Api/NetworksApi.md#getnetwork) | **GET** /networks/{networkId} | Get a network
*NetworksApi* | [**getNetworkForPerson**](docs/Api/NetworksApi.md#getnetworkforperson) | **GET** /people/{personId}/networks/{networkId} | Get network information
*NetworksApi* | [**listNetworksForPerson**](docs/Api/NetworksApi.md#listnetworksforperson) | **GET** /people/{personId}/networks | List network membership
*NodesApi* | [**copyNode**](docs/Api/NodesApi.md#copynode) | **POST** /nodes/{nodeId}/copy | Copy a node
*NodesApi* | [**createAssocation**](docs/Api/NodesApi.md#createassocation) | **POST** /nodes/{nodeId}/targets | Create node association
*NodesApi* | [**createNode**](docs/Api/NodesApi.md#createnode) | **POST** /nodes/{nodeId}/children | Create a node
*NodesApi* | [**createSecondaryChildAssocation**](docs/Api/NodesApi.md#createsecondarychildassocation) | **POST** /nodes/{nodeId}/secondary-children | Create secondary child
*NodesApi* | [**deleteAssocation**](docs/Api/NodesApi.md#deleteassocation) | **DELETE** /nodes/{nodeId}/targets/{targetId} | Delete node association(s)
*NodesApi* | [**deleteNode**](docs/Api/NodesApi.md#deletenode) | **DELETE** /nodes/{nodeId} | Delete a node
*NodesApi* | [**deleteSecondaryChildAssocation**](docs/Api/NodesApi.md#deletesecondarychildassocation) | **DELETE** /nodes/{nodeId}/secondary-children/{childId} | Delete secondary child or children
*NodesApi* | [**getNode**](docs/Api/NodesApi.md#getnode) | **GET** /nodes/{nodeId} | Get a node
*NodesApi* | [**getNodeContent**](docs/Api/NodesApi.md#getnodecontent) | **GET** /nodes/{nodeId}/content | Get node content
*NodesApi* | [**listNodeChildren**](docs/Api/NodesApi.md#listnodechildren) | **GET** /nodes/{nodeId}/children | List node children
*NodesApi* | [**listParents**](docs/Api/NodesApi.md#listparents) | **GET** /nodes/{nodeId}/parents | List parents
*NodesApi* | [**listSecondaryChildren**](docs/Api/NodesApi.md#listsecondarychildren) | **GET** /nodes/{nodeId}/secondary-children | List secondary children
*NodesApi* | [**listSourceAssociations**](docs/Api/NodesApi.md#listsourceassociations) | **GET** /nodes/{nodeId}/sources | List source associations
*NodesApi* | [**listTargetAssociations**](docs/Api/NodesApi.md#listtargetassociations) | **GET** /nodes/{nodeId}/targets | List target associations
*NodesApi* | [**lockNode**](docs/Api/NodesApi.md#locknode) | **POST** /nodes/{nodeId}/lock | Lock a node
*NodesApi* | [**moveNode**](docs/Api/NodesApi.md#movenode) | **POST** /nodes/{nodeId}/move | Move a node
*NodesApi* | [**unlockNode**](docs/Api/NodesApi.md#unlocknode) | **POST** /nodes/{nodeId}/unlock | Unlock a node
*NodesApi* | [**updateNode**](docs/Api/NodesApi.md#updatenode) | **PUT** /nodes/{nodeId} | Update a node
*NodesApi* | [**updateNodeContent**](docs/Api/NodesApi.md#updatenodecontent) | **PUT** /nodes/{nodeId}/content | Update node content
*PeopleApi* | [**createPerson**](docs/Api/PeopleApi.md#createperson) | **POST** /people | Create person
*PeopleApi* | [**deleteAvatarImage**](docs/Api/PeopleApi.md#deleteavatarimage) | **DELETE** /people/{personId}/avatar | Delete avatar image
*PeopleApi* | [**getAvatarImage**](docs/Api/PeopleApi.md#getavatarimage) | **GET** /people/{personId}/avatar | Get avatar image
*PeopleApi* | [**getPerson**](docs/Api/PeopleApi.md#getperson) | **GET** /people/{personId} | Get a person
*PeopleApi* | [**listPeople**](docs/Api/PeopleApi.md#listpeople) | **GET** /people | List people
*PeopleApi* | [**requestPasswordReset**](docs/Api/PeopleApi.md#requestpasswordreset) | **POST** /people/{personId}/request-password-reset | Request password reset
*PeopleApi* | [**resetPassword**](docs/Api/PeopleApi.md#resetpassword) | **POST** /people/{personId}/reset-password | Reset password
*PeopleApi* | [**updateAvatarImage**](docs/Api/PeopleApi.md#updateavatarimage) | **PUT** /people/{personId}/avatar | Update avatar image
*PeopleApi* | [**updatePerson**](docs/Api/PeopleApi.md#updateperson) | **PUT** /people/{personId} | Update person
*PreferencesApi* | [**getPreference**](docs/Api/PreferencesApi.md#getpreference) | **GET** /people/{personId}/preferences/{preferenceName} | Get a preference
*PreferencesApi* | [**listPreferences**](docs/Api/PreferencesApi.md#listpreferences) | **GET** /people/{personId}/preferences | List preferences
*QueriesApi* | [**findNodes**](docs/Api/QueriesApi.md#findnodes) | **GET** /queries/nodes | Find nodes
*QueriesApi* | [**findPeople**](docs/Api/QueriesApi.md#findpeople) | **GET** /queries/people | Find people
*QueriesApi* | [**findSites**](docs/Api/QueriesApi.md#findsites) | **GET** /queries/sites | Find sites
*RatingsApi* | [**createRating**](docs/Api/RatingsApi.md#createrating) | **POST** /nodes/{nodeId}/ratings | Create a rating
*RatingsApi* | [**deleteRating**](docs/Api/RatingsApi.md#deleterating) | **DELETE** /nodes/{nodeId}/ratings/{ratingId} | Delete a rating
*RatingsApi* | [**getRating**](docs/Api/RatingsApi.md#getrating) | **GET** /nodes/{nodeId}/ratings/{ratingId} | Get a rating
*RatingsApi* | [**listRatings**](docs/Api/RatingsApi.md#listratings) | **GET** /nodes/{nodeId}/ratings | List ratings
*RenditionsApi* | [**createRendition**](docs/Api/RenditionsApi.md#createrendition) | **POST** /nodes/{nodeId}/renditions | Create rendition
*RenditionsApi* | [**getRendition**](docs/Api/RenditionsApi.md#getrendition) | **GET** /nodes/{nodeId}/renditions/{renditionId} | Get rendition information
*RenditionsApi* | [**getRenditionContent**](docs/Api/RenditionsApi.md#getrenditioncontent) | **GET** /nodes/{nodeId}/renditions/{renditionId}/content | Get rendition content
*RenditionsApi* | [**listRenditions**](docs/Api/RenditionsApi.md#listrenditions) | **GET** /nodes/{nodeId}/renditions | List renditions
*SearchApi* | [**search**](docs/Api/SearchApi.md#search) | **POST** /search | Searches Alfresco
*SharedlinksApi* | [**createSharedLink**](docs/Api/SharedlinksApi.md#createsharedlink) | **POST** /shared-links | Create a shared link to a file
*SharedlinksApi* | [**deleteSharedLink**](docs/Api/SharedlinksApi.md#deletesharedlink) | **DELETE** /shared-links/{sharedId} | Deletes a shared link
*SharedlinksApi* | [**emailSharedLink**](docs/Api/SharedlinksApi.md#emailsharedlink) | **POST** /shared-links/{sharedId}/email | Email shared link
*SharedlinksApi* | [**getSharedLink**](docs/Api/SharedlinksApi.md#getsharedlink) | **GET** /shared-links/{sharedId} | Get a shared link
*SharedlinksApi* | [**getSharedLinkContent**](docs/Api/SharedlinksApi.md#getsharedlinkcontent) | **GET** /shared-links/{sharedId}/content | Get shared link content
*SharedlinksApi* | [**getSharedLinkRendition**](docs/Api/SharedlinksApi.md#getsharedlinkrendition) | **GET** /shared-links/{sharedId}/renditions/{renditionId} | Get shared link rendition information
*SharedlinksApi* | [**getSharedLinkRenditionContent**](docs/Api/SharedlinksApi.md#getsharedlinkrenditioncontent) | **GET** /shared-links/{sharedId}/renditions/{renditionId}/content | Get shared link rendition content
*SharedlinksApi* | [**listSharedLinkRenditions**](docs/Api/SharedlinksApi.md#listsharedlinkrenditions) | **GET** /shared-links/{sharedId}/renditions | List renditions for a shared link
*SharedlinksApi* | [**listSharedLinks**](docs/Api/SharedlinksApi.md#listsharedlinks) | **GET** /shared-links | List shared links
*SitesApi* | [**createSite**](docs/Api/SitesApi.md#createsite) | **POST** /sites | Create a site
*SitesApi* | [**createSiteMembership**](docs/Api/SitesApi.md#createsitemembership) | **POST** /sites/{siteId}/members | Create a site membership
*SitesApi* | [**createSiteMembershipRequestForPerson**](docs/Api/SitesApi.md#createsitemembershiprequestforperson) | **POST** /people/{personId}/site-membership-requests | Create a site membership request
*SitesApi* | [**deleteSite**](docs/Api/SitesApi.md#deletesite) | **DELETE** /sites/{siteId} | Delete a site
*SitesApi* | [**deleteSiteMembership**](docs/Api/SitesApi.md#deletesitemembership) | **DELETE** /sites/{siteId}/members/{personId} | Delete a site membership
*SitesApi* | [**deleteSiteMembershipForPerson**](docs/Api/SitesApi.md#deletesitemembershipforperson) | **DELETE** /people/{personId}/sites/{siteId} | Delete a site membership
*SitesApi* | [**deleteSiteMembershipRequestForPerson**](docs/Api/SitesApi.md#deletesitemembershiprequestforperson) | **DELETE** /people/{personId}/site-membership-requests/{siteId} | Delete a site membership request
*SitesApi* | [**getSite**](docs/Api/SitesApi.md#getsite) | **GET** /sites/{siteId} | Get a site
*SitesApi* | [**getSiteContainer**](docs/Api/SitesApi.md#getsitecontainer) | **GET** /sites/{siteId}/containers/{containerId} | Get a site container
*SitesApi* | [**getSiteMembership**](docs/Api/SitesApi.md#getsitemembership) | **GET** /sites/{siteId}/members/{personId} | Get a site membership
*SitesApi* | [**getSiteMembershipForPerson**](docs/Api/SitesApi.md#getsitemembershipforperson) | **GET** /people/{personId}/sites/{siteId} | Get a site membership
*SitesApi* | [**getSiteMembershipRequestForPerson**](docs/Api/SitesApi.md#getsitemembershiprequestforperson) | **GET** /people/{personId}/site-membership-requests/{siteId} | Get a site membership request
*SitesApi* | [**listSiteContainers**](docs/Api/SitesApi.md#listsitecontainers) | **GET** /sites/{siteId}/containers | List site containers
*SitesApi* | [**listSiteMembershipRequestsForPerson**](docs/Api/SitesApi.md#listsitemembershiprequestsforperson) | **GET** /people/{personId}/site-membership-requests | List site membership requests
*SitesApi* | [**listSiteMemberships**](docs/Api/SitesApi.md#listsitememberships) | **GET** /sites/{siteId}/members | List site memberships
*SitesApi* | [**listSiteMembershipsForPerson**](docs/Api/SitesApi.md#listsitemembershipsforperson) | **GET** /people/{personId}/sites | List site memberships
*SitesApi* | [**listSites**](docs/Api/SitesApi.md#listsites) | **GET** /sites | List sites
*SitesApi* | [**updateSite**](docs/Api/SitesApi.md#updatesite) | **PUT** /sites/{siteId} | Update a site
*SitesApi* | [**updateSiteMembership**](docs/Api/SitesApi.md#updatesitemembership) | **PUT** /sites/{siteId}/members/{personId} | Update a site membership
*SitesApi* | [**updateSiteMembershipRequestForPerson**](docs/Api/SitesApi.md#updatesitemembershiprequestforperson) | **PUT** /people/{personId}/site-membership-requests/{siteId} | Update a site membership request
*TagsApi* | [**createTagForNode**](docs/Api/TagsApi.md#createtagfornode) | **POST** /nodes/{nodeId}/tags | Create a tag for a node
*TagsApi* | [**deleteTagFromNode**](docs/Api/TagsApi.md#deletetagfromnode) | **DELETE** /nodes/{nodeId}/tags/{tagId} | Delete a tag from a node
*TagsApi* | [**getTag**](docs/Api/TagsApi.md#gettag) | **GET** /tags/{tagId} | Get a tag
*TagsApi* | [**listTags**](docs/Api/TagsApi.md#listtags) | **GET** /tags | List tags
*TagsApi* | [**listTagsForNode**](docs/Api/TagsApi.md#listtagsfornode) | **GET** /nodes/{nodeId}/tags | List tags for a node
*TagsApi* | [**updateTag**](docs/Api/TagsApi.md#updatetag) | **PUT** /tags/{tagId} | Update a tag
*TrashcanApi* | [**deleteDeletedNode**](docs/Api/TrashcanApi.md#deletedeletednode) | **DELETE** /deleted-nodes/{nodeId} | Permanently delete a deleted node
*TrashcanApi* | [**getArchivedNodeRendition**](docs/Api/TrashcanApi.md#getarchivednoderendition) | **GET** /deleted-nodes/{nodeId}/renditions/{renditionId} | Get rendition information for a deleted node
*TrashcanApi* | [**getArchivedNodeRenditionContent**](docs/Api/TrashcanApi.md#getarchivednoderenditioncontent) | **GET** /deleted-nodes/{nodeId}/renditions/{renditionId}/content | Get rendition content of a deleted node
*TrashcanApi* | [**getDeletedNode**](docs/Api/TrashcanApi.md#getdeletednode) | **GET** /deleted-nodes/{nodeId} | Get a deleted node
*TrashcanApi* | [**getDeletedNodeContent**](docs/Api/TrashcanApi.md#getdeletednodecontent) | **GET** /deleted-nodes/{nodeId}/content | Get deleted node content
*TrashcanApi* | [**listDeletedNodeRenditions**](docs/Api/TrashcanApi.md#listdeletednoderenditions) | **GET** /deleted-nodes/{nodeId}/renditions | List renditions for a deleted node
*TrashcanApi* | [**listDeletedNodes**](docs/Api/TrashcanApi.md#listdeletednodes) | **GET** /deleted-nodes | List deleted nodes
*TrashcanApi* | [**restoreDeletedNode**](docs/Api/TrashcanApi.md#restoredeletednode) | **POST** /deleted-nodes/{nodeId}/restore | Restore a deleted node
*VersionsApi* | [**deleteVersion**](docs/Api/VersionsApi.md#deleteversion) | **DELETE** /nodes/{nodeId}/versions/{versionId} | Delete a version
*VersionsApi* | [**getVersion**](docs/Api/VersionsApi.md#getversion) | **GET** /nodes/{nodeId}/versions/{versionId} | Get version information
*VersionsApi* | [**getVersionContent**](docs/Api/VersionsApi.md#getversioncontent) | **GET** /nodes/{nodeId}/versions/{versionId}/content | Get version content
*VersionsApi* | [**listVersionHistory**](docs/Api/VersionsApi.md#listversionhistory) | **GET** /nodes/{nodeId}/versions | List version history
*VersionsApi* | [**revertVersion**](docs/Api/VersionsApi.md#revertversion) | **POST** /nodes/{nodeId}/versions/{versionId}/revert | Revert a version


## Documentation For Models

 - [Activity](docs/Model/Activity.md)
 - [ActivityEntry](docs/Model/ActivityEntry.md)
 - [ActivityPaging](docs/Model/ActivityPaging.md)
 - [ActivityPagingList](docs/Model/ActivityPagingList.md)
 - [Association](docs/Model/Association.md)
 - [AssociationBody](docs/Model/AssociationBody.md)
 - [AssociationEntry](docs/Model/AssociationEntry.md)
 - [AssociationInfo](docs/Model/AssociationInfo.md)
 - [AuditApp](docs/Model/AuditApp.md)
 - [AuditAppEntry](docs/Model/AuditAppEntry.md)
 - [AuditAppPaging](docs/Model/AuditAppPaging.md)
 - [AuditAppPagingList](docs/Model/AuditAppPagingList.md)
 - [AuditBodyUpdate](docs/Model/AuditBodyUpdate.md)
 - [AuditEntry](docs/Model/AuditEntry.md)
 - [AuditEntryEntry](docs/Model/AuditEntryEntry.md)
 - [AuditEntryPaging](docs/Model/AuditEntryPaging.md)
 - [AuditEntryPagingList](docs/Model/AuditEntryPagingList.md)
 - [ChildAssociation](docs/Model/ChildAssociation.md)
 - [ChildAssociationBody](docs/Model/ChildAssociationBody.md)
 - [ChildAssociationEntry](docs/Model/ChildAssociationEntry.md)
 - [ChildAssociationInfo](docs/Model/ChildAssociationInfo.md)
 - [ClientBody](docs/Model/ClientBody.md)
 - [Comment](docs/Model/Comment.md)
 - [CommentBody](docs/Model/CommentBody.md)
 - [CommentEntry](docs/Model/CommentEntry.md)
 - [CommentPaging](docs/Model/CommentPaging.md)
 - [CommentPagingList](docs/Model/CommentPagingList.md)
 - [Company](docs/Model/Company.md)
 - [ContentInfo](docs/Model/ContentInfo.md)
 - [DeletedNode](docs/Model/DeletedNode.md)
 - [DeletedNodeEntry](docs/Model/DeletedNodeEntry.md)
 - [DeletedNodesPaging](docs/Model/DeletedNodesPaging.md)
 - [DeletedNodesPagingList](docs/Model/DeletedNodesPagingList.md)
 - [Download](docs/Model/Download.md)
 - [DownloadBodyCreate](docs/Model/DownloadBodyCreate.md)
 - [DownloadEntry](docs/Model/DownloadEntry.md)
 - [Error](docs/Model/Error.md)
 - [ErrorError](docs/Model/ErrorError.md)
 - [Favorite](docs/Model/Favorite.md)
 - [FavoriteBodyCreate](docs/Model/FavoriteBodyCreate.md)
 - [FavoriteEntry](docs/Model/FavoriteEntry.md)
 - [FavoritePaging](docs/Model/FavoritePaging.md)
 - [FavoritePagingList](docs/Model/FavoritePagingList.md)
 - [FavoriteSite](docs/Model/FavoriteSite.md)
 - [FavoriteSiteBodyCreate](docs/Model/FavoriteSiteBodyCreate.md)
 - [FavoriteSiteEntry](docs/Model/FavoriteSiteEntry.md)
 - [GenericBucket](docs/Model/GenericBucket.md)
 - [GenericBucketBucketInfo](docs/Model/GenericBucketBucketInfo.md)
 - [GenericFacetResponse](docs/Model/GenericFacetResponse.md)
 - [GenericMetric](docs/Model/GenericMetric.md)
 - [Group](docs/Model/Group.md)
 - [GroupBodyCreate](docs/Model/GroupBodyCreate.md)
 - [GroupBodyUpdate](docs/Model/GroupBodyUpdate.md)
 - [GroupEntry](docs/Model/GroupEntry.md)
 - [GroupMember](docs/Model/GroupMember.md)
 - [GroupMemberEntry](docs/Model/GroupMemberEntry.md)
 - [GroupMemberPaging](docs/Model/GroupMemberPaging.md)
 - [GroupMemberPagingList](docs/Model/GroupMemberPagingList.md)
 - [GroupMembershipBodyCreate](docs/Model/GroupMembershipBodyCreate.md)
 - [GroupPaging](docs/Model/GroupPaging.md)
 - [GroupPagingList](docs/Model/GroupPagingList.md)
 - [NetworkQuota](docs/Model/NetworkQuota.md)
 - [Node](docs/Model/Node.md)
 - [NodeAssociation](docs/Model/NodeAssociation.md)
 - [NodeAssociationEntry](docs/Model/NodeAssociationEntry.md)
 - [NodeAssociationPaging](docs/Model/NodeAssociationPaging.md)
 - [NodeAssociationPagingList](docs/Model/NodeAssociationPagingList.md)
 - [NodeBodyCopy](docs/Model/NodeBodyCopy.md)
 - [NodeBodyCreate](docs/Model/NodeBodyCreate.md)
 - [NodeBodyCreateAssociation](docs/Model/NodeBodyCreateAssociation.md)
 - [NodeBodyLock](docs/Model/NodeBodyLock.md)
 - [NodeBodyMove](docs/Model/NodeBodyMove.md)
 - [NodeBodyUpdate](docs/Model/NodeBodyUpdate.md)
 - [NodeChildAssociation](docs/Model/NodeChildAssociation.md)
 - [NodeChildAssociationEntry](docs/Model/NodeChildAssociationEntry.md)
 - [NodeChildAssociationPaging](docs/Model/NodeChildAssociationPaging.md)
 - [NodeChildAssociationPagingList](docs/Model/NodeChildAssociationPagingList.md)
 - [NodeEntry](docs/Model/NodeEntry.md)
 - [NodePaging](docs/Model/NodePaging.md)
 - [NodePagingList](docs/Model/NodePagingList.md)
 - [Pagination](docs/Model/Pagination.md)
 - [PasswordResetBody](docs/Model/PasswordResetBody.md)
 - [PathElement](docs/Model/PathElement.md)
 - [PathInfo](docs/Model/PathInfo.md)
 - [PermissionElement](docs/Model/PermissionElement.md)
 - [PermissionsBodyUpdate](docs/Model/PermissionsBodyUpdate.md)
 - [PermissionsInfo](docs/Model/PermissionsInfo.md)
 - [Person](docs/Model/Person.md)
 - [PersonBodyCreate](docs/Model/PersonBodyCreate.md)
 - [PersonBodyUpdate](docs/Model/PersonBodyUpdate.md)
 - [PersonEntry](docs/Model/PersonEntry.md)
 - [PersonNetwork](docs/Model/PersonNetwork.md)
 - [PersonNetworkEntry](docs/Model/PersonNetworkEntry.md)
 - [PersonNetworkPaging](docs/Model/PersonNetworkPaging.md)
 - [PersonNetworkPagingList](docs/Model/PersonNetworkPagingList.md)
 - [PersonPaging](docs/Model/PersonPaging.md)
 - [PersonPagingList](docs/Model/PersonPagingList.md)
 - [Preference](docs/Model/Preference.md)
 - [PreferenceEntry](docs/Model/PreferenceEntry.md)
 - [PreferencePaging](docs/Model/PreferencePaging.md)
 - [PreferencePagingList](docs/Model/PreferencePagingList.md)
 - [Rating](docs/Model/Rating.md)
 - [RatingAggregate](docs/Model/RatingAggregate.md)
 - [RatingBody](docs/Model/RatingBody.md)
 - [RatingEntry](docs/Model/RatingEntry.md)
 - [RatingPaging](docs/Model/RatingPaging.md)
 - [RatingPagingList](docs/Model/RatingPagingList.md)
 - [Rendition](docs/Model/Rendition.md)
 - [RenditionBodyCreate](docs/Model/RenditionBodyCreate.md)
 - [RenditionEntry](docs/Model/RenditionEntry.md)
 - [RenditionPaging](docs/Model/RenditionPaging.md)
 - [RenditionPagingList](docs/Model/RenditionPagingList.md)
 - [RequestDefaults](docs/Model/RequestDefaults.md)
 - [RequestFacetField](docs/Model/RequestFacetField.md)
 - [RequestFacetFields](docs/Model/RequestFacetFields.md)
 - [RequestFacetIntervals](docs/Model/RequestFacetIntervals.md)
 - [RequestFacetIntervalsIntervals](docs/Model/RequestFacetIntervalsIntervals.md)
 - [RequestFacetQueries](docs/Model/RequestFacetQueries.md)
 - [RequestFacetQueriesInner](docs/Model/RequestFacetQueriesInner.md)
 - [RequestFacetSet](docs/Model/RequestFacetSet.md)
 - [RequestFields](docs/Model/RequestFields.md)
 - [RequestFilterQueries](docs/Model/RequestFilterQueries.md)
 - [RequestFilterQueriesInner](docs/Model/RequestFilterQueriesInner.md)
 - [RequestHighlight](docs/Model/RequestHighlight.md)
 - [RequestHighlightFields](docs/Model/RequestHighlightFields.md)
 - [RequestInclude](docs/Model/RequestInclude.md)
 - [RequestLimits](docs/Model/RequestLimits.md)
 - [RequestLocalization](docs/Model/RequestLocalization.md)
 - [RequestPagination](docs/Model/RequestPagination.md)
 - [RequestPivot](docs/Model/RequestPivot.md)
 - [RequestQuery](docs/Model/RequestQuery.md)
 - [RequestRange](docs/Model/RequestRange.md)
 - [RequestScope](docs/Model/RequestScope.md)
 - [RequestSortDefinition](docs/Model/RequestSortDefinition.md)
 - [RequestSortDefinitionInner](docs/Model/RequestSortDefinitionInner.md)
 - [RequestSpellcheck](docs/Model/RequestSpellcheck.md)
 - [RequestStats](docs/Model/RequestStats.md)
 - [RequestTemplates](docs/Model/RequestTemplates.md)
 - [RequestTemplatesInner](docs/Model/RequestTemplatesInner.md)
 - [ResponseConsistency](docs/Model/ResponseConsistency.md)
 - [ResultBuckets](docs/Model/ResultBuckets.md)
 - [ResultBucketsBuckets](docs/Model/ResultBucketsBuckets.md)
 - [ResultNode](docs/Model/ResultNode.md)
 - [ResultSetContext](docs/Model/ResultSetContext.md)
 - [ResultSetContextFacetQueries](docs/Model/ResultSetContextFacetQueries.md)
 - [ResultSetContextSpellcheck](docs/Model/ResultSetContextSpellcheck.md)
 - [ResultSetPaging](docs/Model/ResultSetPaging.md)
 - [ResultSetPagingList](docs/Model/ResultSetPagingList.md)
 - [ResultSetRowEntry](docs/Model/ResultSetRowEntry.md)
 - [RevertBody](docs/Model/RevertBody.md)
 - [SearchEntry](docs/Model/SearchEntry.md)
 - [SearchEntryHighlight](docs/Model/SearchEntryHighlight.md)
 - [SearchRequest](docs/Model/SearchRequest.md)
 - [SharedLink](docs/Model/SharedLink.md)
 - [SharedLinkBodyCreate](docs/Model/SharedLinkBodyCreate.md)
 - [SharedLinkBodyEmail](docs/Model/SharedLinkBodyEmail.md)
 - [SharedLinkEntry](docs/Model/SharedLinkEntry.md)
 - [SharedLinkPaging](docs/Model/SharedLinkPaging.md)
 - [SharedLinkPagingList](docs/Model/SharedLinkPagingList.md)
 - [Site](docs/Model/Site.md)
 - [SiteBodyCreate](docs/Model/SiteBodyCreate.md)
 - [SiteBodyUpdate](docs/Model/SiteBodyUpdate.md)
 - [SiteContainer](docs/Model/SiteContainer.md)
 - [SiteContainerEntry](docs/Model/SiteContainerEntry.md)
 - [SiteContainerPaging](docs/Model/SiteContainerPaging.md)
 - [SiteContainerPagingList](docs/Model/SiteContainerPagingList.md)
 - [SiteEntry](docs/Model/SiteEntry.md)
 - [SiteMember](docs/Model/SiteMember.md)
 - [SiteMemberEntry](docs/Model/SiteMemberEntry.md)
 - [SiteMemberPaging](docs/Model/SiteMemberPaging.md)
 - [SiteMemberPagingList](docs/Model/SiteMemberPagingList.md)
 - [SiteMembershipBodyCreate](docs/Model/SiteMembershipBodyCreate.md)
 - [SiteMembershipBodyUpdate](docs/Model/SiteMembershipBodyUpdate.md)
 - [SiteMembershipRequest](docs/Model/SiteMembershipRequest.md)
 - [SiteMembershipRequestBodyCreate](docs/Model/SiteMembershipRequestBodyCreate.md)
 - [SiteMembershipRequestBodyUpdate](docs/Model/SiteMembershipRequestBodyUpdate.md)
 - [SiteMembershipRequestEntry](docs/Model/SiteMembershipRequestEntry.md)
 - [SiteMembershipRequestPaging](docs/Model/SiteMembershipRequestPaging.md)
 - [SiteMembershipRequestPagingList](docs/Model/SiteMembershipRequestPagingList.md)
 - [SitePaging](docs/Model/SitePaging.md)
 - [SitePagingList](docs/Model/SitePagingList.md)
 - [SiteRole](docs/Model/SiteRole.md)
 - [SiteRoleEntry](docs/Model/SiteRoleEntry.md)
 - [SiteRolePaging](docs/Model/SiteRolePaging.md)
 - [SiteRolePagingList](docs/Model/SiteRolePagingList.md)
 - [Tag](docs/Model/Tag.md)
 - [TagBody](docs/Model/TagBody.md)
 - [TagEntry](docs/Model/TagEntry.md)
 - [TagPaging](docs/Model/TagPaging.md)
 - [TagPagingList](docs/Model/TagPagingList.md)
 - [UserInfo](docs/Model/UserInfo.md)
 - [Version](docs/Model/Version.md)
 - [VersionEntry](docs/Model/VersionEntry.md)
 - [VersionPaging](docs/Model/VersionPaging.md)
 - [VersionPagingList](docs/Model/VersionPagingList.md)


## Documentation For Authorization


## basicAuth

- **Type**: HTTP basic authentication


## Author

Rhuan Barreto - rhuan@rhuan.com.br
