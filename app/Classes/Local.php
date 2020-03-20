<?php

namespace GitScrum\Classes;

use Auth;
use Carbon;
use GitScrum\Models\Branch;
use GitScrum\Models\User;
use GitScrum\Models\Issue;
use GitScrum\Models\Organization;
use GitScrum\Models\ProductBacklog;
use GitScrum\Contracts\ProviderInterface;
class Local implements ProviderInterface
{

    private $gitlabGroups;

    public function tplUser($obj)
    {

        return ;
    }

    public function tplRepository($repo, $slug = false)
    {
return;
    }

    public function tplOrganization($obj)
    {

        return ;
    }

    public function readRepositories($page = 1, &$repos = null)
    {


        return ;
    }

    public function createOrUpdateRepository($owner, $obj, $oldTitle = null)
    {
    }

    public function organization($obj)
    {
       return ;
    }

    /**
     * Get all members from a specific group in gitlab.
     *
     * @param $group
     *
     * @return \Illuminate\Support\Collection
     */
    private function getGroupsMembers($group)
    {
        return ;
    }

    /**
     * Get all members from the project in gitlab.
     *
     * @param $projectId
     *
     * @return \Illuminate\Support\Collection
     */
    private function getProjectMembers($projectId)
    {

        return ;
    }

    /**
     * A project can be shared with many groups and each group has its members
     * This method retrieves all members from the groups that the project is shared with.
     *
     * @param $projectId
     *
     * @return \Illuminate\Support\Collection|static
     */
    private function getProjectSharedGroupsMembers($projectId)
    {
       return ;
    }

    /**
     * Retrives all project members from three pespectives
     *  Members from the project itself
     *  Members of the groups that the project is owned by
     *  Members by the groups that the project is shared with.
     *
     * @param $owner
     * @param $repo
     * @param null $providerId
     */
    public function readCollaborators($owner, $repo, $providerId = null)
    {
       return ;
    }

    public function createBranches($owner, $product_backlog_id, $repo, $providerId = null)
    {
       return ;
    }

    public function readIssues()
    {
        return;
    }

    public function tplIssue($obj, $productBacklogId)
    {
        return;
    }

    public function createOrUpdateIssue($obj)
    {

        return ;
    }

    public function createOrUpdateIssueComment($obj, $verb = 'POST')
    {

        return ;
    }

    public function deleteIssueComment($obj)
    {

        return ;
    }



}
